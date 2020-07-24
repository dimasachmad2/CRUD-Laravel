<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use App\item;

class ItemModel {
    public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function save($request){
        // $new_item = DB::table('items')->insert($data);

        //cara eloquent
        // $new_item = new item;
        // $new_item->name = $request["name"];
        // $new_item->description = $request["description"];
        // $new_item->stock = $request["stock"];
        // $new_item->price = $request["price"];
        // $new_item->save();

        //cara eloquent 2
        $new_item = item::create([
            "name" => $request["name"],
            "description" => $request["description"],
            "stock" => $request["stock"],
            "price" => $request["price"],
            "category_id" => $request["category_id"]
        ]);

        return $new_item;
    }

    public static function update($id,$request){
        $items = DB::table('items')->where('id',$id)->update([
            "name" => $request["name"],
            "description" => $request["description"],
            "stock" => $request["stock"],
            "price" => $request["price"],
            "category_id" => $request["category_id"]
        ]);
        return $items; 
    }

    public static function findById($id){
        $item = DB::table('items')->where('id',$id)->first();
        return $item;
    }

    public static function destroy($id){
        // $item = DB::table('items')->where('id',$id)->delete();

        //cara eloquent
        $item = item::where('id',$id)->delete();
        return $item;
    }
}

?>