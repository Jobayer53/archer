<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Redirect,Response;


class ExperienceController extends Controller
{


    function index(Request $request){
        $data['experience'] = Experience::all();
        return view("backend.experience.experience",$data);
    }

        /**
     * Store a newly created resource in storage.
     *
     */
   function store(Request $request)
    {
        echo $request->title;
        //
        // $postID = $request->post_id;
        // $post   =   Experience::updateOrCreate(['id' => $postID],
        //             ['title' => $request->title, 'year' => $request->year,'description'=>$request->description]);

        // return Response::json($post);
    }

// get experience data
    function getExperienceData(Request $request){
        // $experience = Experience::all();
        // return response()->json(['experienceData'=> $experience]);

        return view('productAjax');
    }
//add experience
    function add_experience(Request $request){

        $validator = validator::make($request->all(),[
            'title' => 'required',
            'year' => 'required',
            'description' => 'required'
        ]);

        if(!$validator->passes()) {
            return response()->json(['status'=> 0, 'error'=>$validator->errors()]);
        }
        else{
            Experience::insert([
            'title'=>$request->title,
            'year'=> $request->year,
            'description'=> $request->description,

           ]);
           $experience = Experience::all();

           return response()->json(['status'=> 1,'success'=> 'Added successfully','experienceData'=> $experience]);
        }

    }

















}
