<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            // Initialize
            $users = User::query();
            // Search
            $allowed = ['name', 'email'];
            $type  = $request->query('type');
            $query = $request->query('query');
            if ($type && $query && in_array($type, $allowed)) {
                $users->where($type, 'like', "%$query%");
            }
            // Limit
            $limit = $request->query('limit', 10);
            if ($limit === 'all') {
                $users = $users->get();
            } else {
                $users = $users->paginate((int) $limit);
            }
            // Response
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $users
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
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8'
            ]);
            $validated['password'] = Hash::make($validated['password']);
            $user = User::create($validated);
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $user
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
    public function show(User $user): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $user
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
    public function update(Request $request, User $user): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'sometimes|max:255',
                'email' => 'sometimes|email|unique:users,email,' . $user->id,
                'password' => 'sometimes|min:8'
            ]);
            if (isset($validated['password'])) {
                $validated['password'] = Hash::make($validated['password']);
            }
            $user->update($validated);
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $user->refresh()
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
    public function destroy(User $user): JsonResponse
    {
        try {
            $user->delete();
            return response()->json([
                'status' => true,
                'message' => 'Success',
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
