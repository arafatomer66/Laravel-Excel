<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student ;


class data extends Controller
{
    public function index (){
        $data = Student::all();

        return response()->json($data);
    }
}
