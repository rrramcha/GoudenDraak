<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use PHPUnit\Util\Json;

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
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();
        $grouped = $menuItems->groupBy('item_category');
        return view('home.menu', [
            'itemCategories' => $itemCategories,
            'menuItems' => $grouped
        ]);
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

    /**
     * Download a pdf of the menu
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function downloadMenu()
    {
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();
        $grouped = $menuItems->groupBy('item_category');

        $pdf = PDF::loadView('home.menutable', [
            'itemCategories' => $itemCategories,
            'menuItems' => $grouped
        ]);
        return $pdf->download('menu.pdf');
    }

    public function GetJSONMenu(){
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();

        return $menuItems->toJson();
    }
}
