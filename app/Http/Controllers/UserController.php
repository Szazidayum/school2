<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function delete($id)
    {
        User::find($id)->delete();
    }


    public function getUser($id)
    {
        $user = response()->json(User::find($id));
        return $user;
    }

    public function listView()
    {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
    public function editView($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }

    public function newView(){
        return view('user.new');
    }
}
