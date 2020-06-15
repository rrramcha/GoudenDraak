<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\MenuItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the indexpage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display the indexpage.
     *
     * @
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dishOverview()
    {
        $menuItems = MenuItem::all();
        $itemCategories = ItemCategory::all();
        $grouped = $menuItems->groupBy('item_category');
        return view('admin.dishes.index', [
            'itemCategories' => $itemCategories,
            'menuItems' => $grouped
        ]);
    }

    public function createDish(){
        $itemCategories = ItemCategory::all();
        return view('admin.dishes.createdish', [
            'itemCategories' => $itemCategories
        ]);
    }

    public function storeDish(Request $request){
        $validData = $request->validate([
            'menu_prefix' => '',
            'menu_number' => 'required',
            'menu_suffix' => '',
            'item_name' => 'required',
            'price' => 'required',
            'item_category' => 'required'
        ]);

        $dish = MenuItem::create([
            'menu_prefix' => $request->input('menu_prefix'),
            'menu_number' => $request->input('menu_number'),
            'menu_suffix' => $request->input('menu_suffix'),
            'item_name' => $request->input('item_name'),
            'price' => $request->input('price'),
            'item_category' => $request->input('item_category')
        ]);

        $dish->save();
        return redirect('admin/dishes');
    }
}
