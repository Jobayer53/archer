<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    function index(){
        return view('backend.work.work');
    }
    // function work_detail(){
    //     return view('frontend.work_single');
    // }
}
