<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        return view('index', ['data' => MyModel::models()]);
    }
}
