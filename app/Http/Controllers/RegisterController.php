<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\MenuItem;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display the indexpage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();
        $grouped = $menuItems->groupBy('item_category');
        return view('register.index', [
            'itemCategories' => $itemCategories,
            'menuItems' => $grouped
        ]);
    }

    /**
     * Display the loginpage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('register.login');
    }

    public function readItems(){
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();
        $grouped = $menuItems->groupBy('item_category');
        return $menuItems;
    }
}
