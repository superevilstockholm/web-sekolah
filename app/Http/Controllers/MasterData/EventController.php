<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Exception;

use App\Models\MasterData\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $events = Events::query();
            // Search by allowed fields including author
            $allowed = ['title', 'slug', 'content', 'author', 'category'];
            $type  = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                if ($type === 'author') {
                    $events->whereHas('user', fn($q) =>
                        $q->where('name', 'like', "%$query%")
                    );
                } elseif ($type === 'category') {
                    if (in_array($query, ['acara', 'acara_berita'])) {
                        $events->where('category', $query);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Invalid category'
                        ], 400);
                    }
                } else {
                    $events->where($type, 'like', "%$query%");
                }
            }
            // Limit / pagination
            $limit = $request->query('limit', 10);
            $events = $limit === 'all'
                ? $events->with('user:id,name')->get()
                : $events->with('user:id,name')->paginate((int) $limit);
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $events
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
                'slug' => 'nullable|string|max:255|unique:events,slug',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'category' => 'required|in:acara,acara_berita',
                'user_id' => 'required|exists:users,id'
            ]);
            $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = $file->store('uploads/events', 'public');
                $validated['image'] = $path;
            }
            $event = Events::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Event berhasil dibuat',
                'data' => $event
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
    public function show(Events $event): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $event->load('user')
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $event): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title'   => 'sometimes|required|string|max:255',
                'slug'    => 'sometimes|nullable|string|max:255|unique:events,slug,' . $event->id,
                'content' => 'sometimes|required|string',
                'image'   => 'sometimes|nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'category' => 'sometimes|required|in:acara,acara_berita',
            ]);
            if (!isset($validated['slug']) && isset($validated['title'])) {
                $validated['slug'] = Str::slug($validated['title']);
            }
            if (isset($validated['image'])) {
                if ($event->image && Storage::disk('public')->exists($event->image)) {
                    Storage::disk('public')->delete($event->image);
                }
                $validated['image'] = $request->file('image')->store('uploads/events', 'public');
            }
            $event->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Event berhasil diperbarui',
                'data' => $event
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
    public function destroy(Events $event): JsonResponse
    {
        try {
            if ($event->image && Storage::disk('public')->exists($event->image)) {
                Storage::disk('public')->delete($event->image);
            }
            $event->delete();
            return response()->json([
                'status' => true,
                'message' => 'Event berhasil dihapus',
            ], 200);
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
                $path = $file->storeAs('uploads/events', $filename, 'public');
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
