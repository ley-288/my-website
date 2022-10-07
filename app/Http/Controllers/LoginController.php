<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.jiant-login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //logged in
            //return redirect()->intended('/')
            //         ->withSuccess('Signed in');

        } else {
            //do something if credentials wrong
            return response()->json(['error' => 'Error msg'], 404);
        }

        $email = "leyton@jiant.it";
        $data = "Jiant";
        Mail::to($email)->send(new WelcomeMail($data));

    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function userRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:5',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        $email = $request->email;
        $data = $request->name;
        Mail::to($email)->send(new WelcomeMail($data));

        //return back();

        // LETS SEE
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //logged in
            //return redirect()->intended('/')
            //         ->withSuccess('Signed in');
            return back();

        } else {
            //do something if credentials wrong
            return response()->json(['error' => 'Error msg'], 404);
        }

        //return redirect("/")->withSuccess('You have signed-in');
        //return;
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
