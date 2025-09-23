<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

use App\Models\MasterData\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $blogs = Blogs::query();
            // Search by allowed fields including author
            $allowed = ['title', 'slug', 'content', 'author', 'category'];
            $type  = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'author') {
                    $blogs->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } elseif ($type === 'category') {
                    if (in_array($query, ['blog', 'artikel'])) {
                        $blogs->where('category', $query);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Invalid category'
                        ], 400);
                    }
                } else {
                    $blogs->where($type, 'like', "%$query%");
                }
            }
            // Limit / pagination
            $limit = $request->query('limit', 10);
            $blogs = $limit === 'all'
                ? $blogs->with('user:id,name')->get()
                : $blogs->with('user:id,name')->paginate((int) $limit);
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $blogs
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:blogs,slug',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'category' => 'required|in:blog,artikel',
                'user_id' => 'required|exists:users,id'
            ]);
            $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = $file->store('uploads/blogs', 'public');
                $validated['image'] = $path;
            }
            $blog = Blogs::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Blog berhasil dibuat',
                'data' => $blog
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blog): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $blog->load('user')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blog): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title'   => 'sometimes|required|string|max:255',
                'slug'    => 'sometimes|nullable|string|max:255|unique:blogs,slug,' . $blog->id,
                'content' => 'sometimes|required|string',
                'image'   => 'sometimes|nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'category' => 'sometimes|required|in:blog,artikel',
            ]);
            if (!isset($validated['slug']) && isset($validated['title'])) {
                $validated['slug'] = Str::slug($validated['title']);
            }
            if (isset($validated['image'])) {
                if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                    Storage::disk('public')->delete($blog->image);
                }
                $validated['image'] = $request->file('image')->store('uploads/blogs', 'public');
            }
            $blog->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Blog berhasil diperbarui',
                'data' => $blog
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blog): JsonResponse
    {
        try {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->delete();
            return response()->json([
                'status' => true,
                'message' => 'Blog berhasil dihapus',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Upload image for CKEditor image content
    public function uploadImage(Request $request): JsonResponse
    {
        try {
            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads/blogs', $filename, 'public');
                $url = asset('storage/' . $path);
                return response()->json(['url' => $url], 201);
            }
            return response()->json(['error' => 'No file uploaded'], 400);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Upload failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
