<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organ;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    //
    function show(){
        // $data=organ::all();
        // $data = organ::where('status', '=', 'pending')->firstOrFail();
        $data = DB::table('organs')
        ->where('status', 'approved')
        ->get();
        return view('organ',['organ'=>$data]);
    }

}
