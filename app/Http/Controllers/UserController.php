<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }
    
    public function update(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);
        
        Session::flash('success_message', 'Edited successfully!');
        return redirect()->route('home');

    }

    public function index()
    {
        
        return view('users.index', compact('users'));
    }

    public function destroy(User $users)
    {
       $user->delete();
        Session::flash('delete_message', 'Deleted successfully!');
        return redirect()->route('home');
    }
}
