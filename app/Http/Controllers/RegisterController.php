<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function register(Request $request){
        $password = $request->input('password');
        $data = new User;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = bcrypt($password);
        $data->save();
        $request->session()->flash('status','Registered Successfully');
        return redirect('register');
    }
}
