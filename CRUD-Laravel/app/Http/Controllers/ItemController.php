<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function create(){
        return view('item.form');
    }

    public function store(Request $request){
        unset($request["_token"]);
        $new_item = ItemModel::save($request->all());
        return redirect('/items');
    }

    public function index(){
        $items = ItemModel::get_all();
        // dd($items->all());
        return view('item.index', compact('items'));
    }
}
