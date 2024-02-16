<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Redirect,Response;


class ExperienceController extends Controller
{


    function index(){

        return view("backend.experience.experience");
    }


















}
