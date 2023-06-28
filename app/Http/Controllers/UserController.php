<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);

        return view('usuarios.index-usuarios', ['users'=> $users]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('usuarios.create-usuarios', ['roles' => $roles]);
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $users = User::create($data);

            return redirect()->route('indexusers');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('usuarios.edit-usuarios', ['roles' => $roles, 'user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->all();
        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user->password;
        }
        $user->update($data);

        return redirect()->route('indexusers');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('indexusers');
    }
}
