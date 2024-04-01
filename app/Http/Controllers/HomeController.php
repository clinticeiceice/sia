<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index(User $users)
     {
        $users = User::all();
        $isAdmin = auth()->user()->user_type === 'admin';
        return view('home', compact('users','isAdmin'));
     }
    // REGISTER ACCOUNT
    function register(Request $request) {
        try {
            
        } catch (\Throwable $th) {
            
        }
    }
}
