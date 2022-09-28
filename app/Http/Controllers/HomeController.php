<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @param $locale
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        if(Auth::check()){
            return view('new');
        }
        return redirect("login")->withSuccess('You are not allowed to access');

        //return view('new');
    }
}
