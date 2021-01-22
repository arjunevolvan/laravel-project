<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restorent;
class RestoController extends Controller
{
    function index(){
        return view('home');
    }
    function list(){
        $data = restorent::all();
        return view('list',["data"=>$data]);
    }
}
