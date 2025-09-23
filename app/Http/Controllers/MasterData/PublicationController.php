<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;

use App\Models\MasterData\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $publications = Publication::query();
            // Search
            $allowed = ['title'];
            $type  = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                $publications->where($type, 'like', "%$query%");
            }
            // Limit
            $limit = $request->query('limit', 10);
            $publications = $limit === 'all'
                ? $publications->get()
                : $publications->paginate((int) $limit);
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $publications
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
                'cover' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'file' => 'required|mimes:pdf|max:100000',
            ]);
            if ($request->hasFile('cover')) {
                $validated['cover'] = $request->file('cover')->store('publication/covers', 'public');
            }
            if ($request->hasFile('file')) {
                $validated['file_path'] = $request->file('file')->store('publication/files', 'public');
                unset($validated['file']);
            }
            $publication = Publication::create($validated);
            return response()->json([
                'status'  => true,
                'message' => 'Publication created successfully',
                'data'    => $publication
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
    public function show(Publication $publication): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $publication
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
    public function update(Request $request, Publication $publication): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'sometimes|string|max:255',
                'cover' => 'sometimes|nullable|image|mimes:jpg,jpeg,png|max:2048',
                'file' => 'sometimes|nullable|mimes:pdf|max:100000',
            ]);
            if ($request->hasFile('cover')) {
                if ($publication->cover && Storage::disk('public')->exists($publication->cover)) {
                    Storage::disk('public')->delete($publication->cover);
                }
                $validated['cover'] = $request->file('cover')->store('publication/covers', 'public');
            }
            if ($request->hasFile('file')) {
                if ($publication->file_path && Storage::disk('public')->exists($publication->file_path)) {
                    Storage::disk('public')->delete($publication->file_path);
                }
                $validated['file_path'] = $request->file('file')->store('publication/files', 'public');
                unset($validated['file']);
            }
            $publication->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Publication updated successfully',
                'data' => $publication
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
    public function destroy(Publication $publication): JsonResponse
    {
        try {
            if ($publication->cover && Storage::disk('public')->exists($publication->cover)) {
                Storage::disk('public')->delete($publication->cover);
            }
            if ($publication->file_path && Storage::disk('public')->exists($publication->file_path)) {
                Storage::disk('public')->delete($publication->file_path);
            }
            $publication->delete();
            return response()->json([
                'status' => true,
                'message' => 'Publication deleted successfully'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
