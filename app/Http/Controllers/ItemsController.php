<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Items;

class ItemsController extends Controller
{
    public function view()
    {
       $items= Items::orderBy('id' ,'DESC')->get();

        return view("Items.index")->with("items",$items);
    }


    public function create ()
    {
        $items= Items::orderBy('id' ,'DESC')->get();

        return view("Items.Create")->with("items",$items);
    }

    
    public function stor ()
    {
       $new_items= new Items;
       $new_items->Name= request()->name; 
       $new_items->Price= request()->Price; 
       $new_items->img=""; 
       $new_items->details= request()->details; 
       $new_items->save();

      $items= Items::orderBy('id' ,'DESC')->get();

      return view("Items.Create")->with("items",$items);
    }
    
    public function delete($id)
    {

        $item_D=Items::find($id);
        $item_D->delete();
     //   return "yyyyyyyy";
        $items= Items::orderBy('id' ,'DESC')->get();
       return view("Items.Create")->with("items",$items);
    }
}
