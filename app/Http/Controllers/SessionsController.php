<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        // if(! auth()->attempt(request(['email', 'password']))) {

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return back();
        }

        session()->flash('message', 'Login was successful');

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
