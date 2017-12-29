<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyUser;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required|confirmed| min:6'
            
        ]);    

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();  //save -  laravelov metod za unos u bazu

        Mail::to($user)->send(new VerifyUser($user));

        //auth()->login($user);

        return redirect('/login');

    }
}
