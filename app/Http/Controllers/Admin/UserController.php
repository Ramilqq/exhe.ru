<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {   
        $users = User::get()->toArray();
        return view('admin.user_index', [
            'users' => $users
        ]);
    }

    public function show (User $user)
    {   
        return view('admin.user_show', [
            'user' => $user,
        ]);
    }

    public function create ()
    {
        return view('admin.user_create');
    }

    public function store (UserRequest $request)
    {
        User::create($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.user_index');
    }

    public function edit (User $user)
    {
        return view('admin.user_edit', [
            'user' => $user
        ]);
    }

    public function update (UserRequest $request, User $user)
    {   
        $user->update($request->validated()) ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.user_show', $user->id);
    }

    public function delete (User $user)
    {
        $user->delete() ? $this->alert_success() : $this->alert_error();
        return redirect()->route('admin.user_index');
    }
}
