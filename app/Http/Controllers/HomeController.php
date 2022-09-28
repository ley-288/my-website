<?php

namespace App\Http\Controllers;
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
        return view('new');
    }
}
