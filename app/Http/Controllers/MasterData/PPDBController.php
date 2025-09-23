<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;

use App\Models\MasterData\PPDB;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            // Initialize
            $ppdb = PPDB::query();
            // Search
            $allowedFields = ['nama_peserta_didik', 'email', 'jenis_pendaftaran', 'jenjang'];
            if ($request->filled('type') && $request->filled('query') && in_array($request->type, $allowedFields)) {
                $ppdb->where($request->type, 'like', '%' . $request->query . '%');
            }
            // Limit
            $limit = $request->query('limit', 10);
            if ($limit === 'all') {
                $ppdb = $ppdb->get();
            } else {
                $ppdb = $ppdb->paginate((int) $limit);
            }
            // Response
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $ppdb
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
                'jenis_pendaftaran' => 'required|in:Peserta Didik Baru,Mutasi',
                'jenjang' => 'required|in:TK,SD,SMP,SMA',
                'nama_peserta_didik' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:L,P',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'no_telp' => 'nullable|string|max:20',
                'no_hp' => 'nullable|string|max:20',
                'no_hp2' => 'nullable|string|max:20',
                'email' => 'nullable|email|unique:ppdb,email'
            ]);
            $ppdb = PPDB::create($validated);

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil disimpan',
                'data' => $ppdb
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
    public function show(PPDB $ppdb): JsonResponse
    {
        try {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => $ppdb
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
    public function update(Request $request, PPDB $ppdb): JsonResponse
    {
        try {
            $validated = $request->validate([
                'jenis_pendaftaran' => 'sometimes|required|in:Peserta Didik Baru,Mutasi',
                'jenjang' => 'sometimes|required|in:TK,SD,SMP,SMA',
                'nama_peserta_didik' => 'sometimes|required|string|max:255',
                'jenis_kelamin' => 'sometimes|required|in:L,P',
                'tempat_lahir' => 'sometimes|required|string|max:255',
                'tanggal_lahir' => 'sometimes|required|date',
                'no_telp' => 'sometimes|nullable|string|max:20',
                'no_hp' => 'sometimes|nullable|string|max:20',
                'no_hp2' => 'sometimes|nullable|string|max:20',
                'email' => 'sometimes|nullable|email|unique:ppdb,email,' . $ppdb->id,
            ]);
            $ppdb->update($validated);
            return response()->json([
                'status'  => true,
                'message' => 'Data berhasil diperbarui',
                'data'    => $ppdb
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
    public function destroy(PPDB $ppdb): JsonResponse
    {
        try {
            $ppdb->delete();
            return response()->json([
                'status' => true,
                'message' => 'Success',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
