<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    function index(){
        return view('backend.education.education');
    }
}
