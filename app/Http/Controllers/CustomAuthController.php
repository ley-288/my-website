<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
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
