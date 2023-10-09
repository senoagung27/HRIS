<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    // public function index_view ()
    // {
    //     return view('pages.user.user-data', [
    //         'user' => User::class
    //     ]);
    // }
    public function index()
    {
        $data = User::latest()->paginate(10);

        return view('pages.user.user-data', compact('data'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(User $user, StoreUserRequest $request)
    {
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
        $user->create(array_merge($request->validated(), [
            'password' => 'test'
        ]));

        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }
    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
