<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\UserDetail;


class MultipleDBController extends Controller
{
    function list()
    {
        $data = Products::all();
        return view('Products')->with('data', $data);
    }
}
