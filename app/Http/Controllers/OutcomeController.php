<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;
use App\Services\OutcomeService;

class OutcomeController extends Controller
{
    public function __construct(protected OutcomeService $service)
    {
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all();
        // return response()->json($data, 200);
        return $this->response($data, 'sukses menampilkan data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $data = $this->service->create($payload);
        // return response()->json($data, 201);
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'succesfully',
        //     'data' => $data,
        // ], 200);

        return $this->response($data, 'sukses membuat data');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        // return response()->json($data, 200);
        return $this->response($data, 'sukses menampilkan data');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outcome $outcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        // return response()->json($data, 200);
        return $this->response($data, "sukses menghapus data");
    }
    
}
