<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

use App\item;
use App\Category;
use App\Tag;

class ItemController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('item.form', compact('categories'));
    }

    public function store(Request $request)
    {
        // unset($request["_token"]);
        //create item baru
        $new_item = ItemModel::save($request->all());
        // dd($new_item);

        $tagArr = explode(',', $request->tags);
        $tagsMulti = [];
        foreach ($tagArr as $strTag) {
            $tagArrAssc["tag_name"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        //tags baru
        foreach ($tagsMulti as $tagCheck) {
            $tag = Tag::firstOrcreate($tagCheck);
            $new_item->tags()->attach($tag->id);
        }
        // dd($tag);
        return redirect('/items');
    }

    public function show($id)
    {
        // $item = ItemModel::findById($id);

        $item = item::find($id);
        // dd($item->tags);
        return view('item.item', compact('item'));
    }

    public function edit($id)
    {
        $item = ItemModel::findById($id);
        $categories = Category::all();
        return view('item.form_edit', compact('item', 'categories'));
    }

    public function update($id, Request $request)
    {
        unset($request["_token"]);
        $item = ItemModel::update($id, $request->all());
        return redirect('/items');
    }

    public function destroy($id)
    {
        $item = ItemModel::destroy($id);
        return redirect('/items');
    }

    public function index()
    {
        // $items = ItemModel::get_all();
        // dd($items->all());
        $items = item::all();
        // dd($items);
        return view('item.index', compact('items'));
    }
}
