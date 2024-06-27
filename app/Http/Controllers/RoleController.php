<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(protected RoleService $service)
    {
        
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all();
        return $this->response($data, 'sukses menampilkan data');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $data = $this->service->create($payload);
        return $this->response($data, 'sukses membuat data');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        return $this->response($data, 'sukses menampilkan data');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        return $this->response($data, 'sukses menghapus data');
    }
}
