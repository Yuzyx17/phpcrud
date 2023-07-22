<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::orderBy('id','desc')->paginate(3);

        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Users::create($input);
        return redirect('users')->with('flash_message', 'User Addedd!');  
    }

    public function show($id)
    {
        $users = Users::find($id);
        return view('users.show')->with('users', $users);
    }

    public function edit($id)
    {
        $users = Users::find($id);
        return view('users.edit')->with('users', $users);
    }

    public function update(Request $request, $id)
    {
        $users = Users::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');  
    }

    public function destroy($id)
    {
        Users::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted!');  
    }
}
