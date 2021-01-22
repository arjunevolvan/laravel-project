<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restorent;
use App\Models\User;


class RestoController extends Controller
{
    function index(){
        return view('home');
    }
    function list(){
        $data = restorent::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $request){
        $data = new restorent;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->save();
        $request->session()->flash('status','Restaurent added successfully');
        return redirect('list');
    }
    function delete(Request $request, $id){
        $data = restorent::find($id);
        $data->delete();
        $request->session()->flash('status','Restaurent Deleted successfully');
        return redirect('list');
    }

    public function edit($id){
        $data = restorent::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $request){
        $data = restorent::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        $request->session()->flash('status','Restaurent Update successfully');
        return redirect('list');
    }
}
