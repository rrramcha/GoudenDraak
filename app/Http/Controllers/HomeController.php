<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display the menu.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMenu()
    {
        return view('home.menu');
    }

    /**
     * Display the contactpage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showContact()
    {
        return view('home.contact');
    }

    /**
     * Display the newspage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNews()
    {
        return view('home.news');
    }
}
