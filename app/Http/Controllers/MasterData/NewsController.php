<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Exception;

use App\Models\MasterData\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $news = News::query();

            // Search by allowed fields including author
            $allowed = ['title', 'slug', 'content', 'author'];
            if ($request->filled('type') && $request->filled('query') && in_array($request->type, $allowed)) {
                if ($request->type === 'author') {
                    $news->whereHas('user', fn($q) => $q->where('name', 'like', '%' . $request->query . '%'));
                } else {
                    $news->where($request->type, 'like', '%' . $request->query . '%');
                }
            }

            // Limit / pagination
            $limit = $request->query('limit', 10);
            $news = $limit === 'all' ? $news->get() : $news->paginate((int) $limit);

            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $news->load(['user:id,name'])
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
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255|unique:news,slug',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'user_id' => 'required|exists:users,id'
            ]);
            $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = $file->store('uploads/news', 'public');
                $validated['image'] = $path;
            }

            $news = News::create($validated);

            return response()->json([
                'status' => true,
                'message' => 'News berhasil dibuat',
                'data' => $news
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
    public function show(News $news): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $news->load('user')
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
    public function update(Request $request, News $news)
    {
        try {
            $validated = $request->validate([
                'title'   => 'sometimes|required|string|max:255',
                'slug'    => 'sometimes|nullable|string|max:255|unique:news,slug,' . $news->id,
                'content' => 'sometimes|required|string',
                'image'   => 'sometimes|nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);
            if (!isset($validated['slug']) && isset($validated['title'])) {
                $validated['slug'] = Str::slug($validated['title']);
            }
            if (isset($validated['image'])) {
                if ($news->image && Storage::disk('public')->exists($news->image)) {
                    Storage::disk('public')->delete($news->image);
                }
                $validated['image'] = $request->file('image')->store('uploads/news', 'public');
            }
            $news->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'News berhasil diperbarui',
                'data' => $news
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
    public function destroy(News $news): JsonResponse
    {
        try {
            // Hapus image jika ada
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
            $news->delete();

            return response()->json([
                'status' => true,
                'message' => 'News berhasil dihapus',
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
                $path = $file->storeAs('uploads/news', $filename, 'public');
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
