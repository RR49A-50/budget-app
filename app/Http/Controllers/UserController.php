<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserService $service)
    {
        
    }

    public function index()
    {
        $data = $this->service->all()->toArray();
        // return $this->response($data, 200);
        return $this->response($data, 'sukses menampilkan data');
    }

    public function store(UserRequest $request)
    {
        $payload = $request->validated();
        $data = $this->service->create($payload);
        // return response()->json($data, 201);
        return $this->response($data, 'sukses membuat data');
    }

    public function show(int $id)
    {
        $data = $this->service->show($id);
        // return response()->json($data, 200);
        return $this->response($data, 'sukses menampilkan data');
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        // return response()->json($data, 200);
        return $this->response($data, 'sukses menghapus data');
    }
}
