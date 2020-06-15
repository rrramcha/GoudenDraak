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
        return view('admin.dishes.create', [
            'itemCategories' => $itemCategories
        ]);
    }

    public function storeDish(Request $request){
        $validData = $request->validate([
            'item_name' => 'required',
            'price' => 'required',
            'item_category' => 'required'
        ]);
        $number = ['menu_number' => MenuItem::max('menu_number')+1];
        $data = array_merge($validData, $number);
        $dish = MenuItem::create($data);
        $dish->save();

        return redirect(route('admin.dish.overview'));
    }

    /**
     * @param MenuItem $menuItem
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editDish(MenuItem $menuItem){
        $itemCategories = ItemCategory::all();
        return view('admin.dishes.edit', [
            'itemCategories' => $itemCategories,
            'menuItem' => $menuItem
        ]);
    }

    public function updateDish(MenuItem $menuItem, Request $request){
        $validData = $request->validate([
            'item_name' => 'required',
            'price' => 'required',
            'item_category' => 'required'
        ]);

        $menuItem->update($validData);
        $menuItem->save();
        return redirect('admin/dishes');
    }

    public function deleteDish(MenuItem $menuItem){
        $menuItem->delete();
        return redirect(route('admin.dish.overview'));
    }
}
