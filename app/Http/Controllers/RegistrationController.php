<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $form)
    {
        $form->persist();

        session()->flash('message', 'You are successfully signed up');

        return redirect('/');
    }
}
