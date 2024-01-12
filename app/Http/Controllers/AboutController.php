<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function about_content(){
        $about = About::all();
        return view('backend.about.aboutcontent',[
            'about' => $about,
        ]);
    }

//about content update
    function aboutcontent_update(Request $request){

        $request->validate([
            'title'=> 'required',
            'short_title'=> 'required',
            'name'=> 'required',
            'birth_date'=> 'required',
            'nationality'=> 'required',
            'work_status'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'freelancer'=> 'required',
        ]);

        About::where('id',1)->update([
            'title'=>  $request->title,
            'short_title'=>  $request->short_title,
            'name'=>  $request->name,
            'birth_date'=>  $request->birth_date,
            'nationality'=>  $request->nationality,
            'work_status'=>  $request->work_status,
            'phone'=>  $request->phone,
            'email'=>  $request->email,
            'address'=>  $request->address,
            'freelancer'=>  $request->freelancer,
        ]);

        return back();


    }

// About Image
    function about_image(){
        $about = About::all();
        return view('backend.about.aboutimage',[
            'about'=> $about,
        ]);
    }

//about image update
function aboutimage_update(Request $request){

    $image = About::where('id',1)->get()->first()->image;

    if($image == null){


        $request->validate([
            'aboutimage'=> 'required',
        ]);


        $aboutid = About::where('id',1)->get()->first()->id;
        $uploaded_file = $request->aboutimage;
        $extension = $uploaded_file->getClientOriginalExtension();
        $filename = $aboutid.'.'.$extension;

        Image::make($uploaded_file)->save(public_path('uploads/about/'.$filename));


        About::where('id',1)->update([
            'image' => $filename,
        ]);

        return back();


    }
    else{

        $request->validate([
            'aboutimage'=> 'required',
        ]);


        $delete_from = public_path('uploads/about/'.$image);
            unlink($delete_from);

        $aboutid = About::where('id',1)->get()->first()->id;
        $uploaded_file = $request->aboutimage;
        $extension = $uploaded_file->getClientOriginalExtension();
        $filename = $aboutid.'.'.$extension;

        Image::make($uploaded_file)->save(public_path('uploads/about/'.$filename));


        About::where('id',1)->update([
            'image' => $filename,
        ]);

        return back();

    }


}

//download cv





}
