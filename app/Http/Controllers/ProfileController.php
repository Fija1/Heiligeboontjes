<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use App\User;

class ProfileController extends Controller
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

    public function index()
    {
        return view('profile.index');
    }

    public function edit(User $user)
    {
        // Check if login user is the same as edit user.
        if ($user->id == Auth::user()->id) {
            return view('profile.edit', compact('user'));
        } else {
            return redirect('/profile');
        }
    }

    public function update(Request $request, User $user)
    {
        // Validate form values
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.auth()->id().'NULL'
        ]);

        $user->update($request->all());
        Session::flash('status', 'Profile has been updated!');

        return redirect('/profile');
    }

}