<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Http\Requests\CreateUserFormRequest;

class ManageUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usersQuery = User::query();
        $users = $usersQuery->get();

        return view('admin.manage.manage_users', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.manage.create_user', compact('roles'));
    }

    public function userAdd(CreateUserFormRequest $request)
    {
        $user = new User([
            'login' => $request->input('login'),
            'password' => bcrypt($request->input('password')),
        ]);
        $role = Role::find($request->input('role'));
        $user->save();
        $user->role()->attach($role);


        return redirect('panel/manage-user');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.manage.edit_user', compact('user', 'roles'));
    }

    public function update(User $user)
    {
        $user->login = request('login');
        $user->password = bcrypt(request('password'));
        $role = Role::find(request('role'));
        $user->save();
        $user->role()->attach($role);

        return redirect('panel/manage-user');
    }

    public function userDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('panel/manage-user');
    }

}
