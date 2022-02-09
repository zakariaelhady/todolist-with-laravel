<?php

namespace App\Http\Controllers;

use App\Models\listitem;
use Illuminate\Http\Request;

class todolistcontroller extends Controller
{
    public function index(){
        return view('welcome',['listitems'=>listitem::all()]);
    }

    public function markcomplete($id){
        $listitem=listitem::find($id);
        $listitem->is_complete==0?$listitem->is_complete=1:$listitem->is_complete=0;
        $listitem->save();
        return redirect('/');
    }

    public function deleteitem($id){
        $listitem=listitem::find($id);
        $listitem->delete();
        // $listitem->save();
        return redirect('/');
    }
    public function saveItem(Request $request){
        $newListitem=new listitem();
        $newListitem->item=$request->listitem;
        $newListitem->is_complete=0;
        $newListitem->save();
        
        return redirect('/');
    }
}
