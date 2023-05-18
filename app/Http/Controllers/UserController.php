<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',['users'=>$users]);
    }
 
    public function show(User $user,$id)
    {
        
        $u=$user::find($id);
        return view('users.show',['user'=>$u]);

    }


    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        // return response()->json($user, 201);
        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(User $user,$id)
    {
        //get post by ID
        $u=$user::findOrFail($id);

        //render view with user
        return view('users.edit', ['user'=>$u]);
    }
    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $request->validate([

            'nama' => 'nullable',
            'email' => 'nullable',


        ]);

        $user->update($request->all());


        // return response()->json($user, 200);
        return redirect()->route('home')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete(User $user,$id)
    {
        $user::destroy($id);
        // return response()->json("delete success", 204);
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
