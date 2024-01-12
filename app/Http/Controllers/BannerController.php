<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Banner;
use Illuminate\Http\Request;
use Image;

class BannerController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

//Banner Content
    function banner_content(){
        $banner = Banner::all();
        return view('backend.banner.bannercontent',[
            'banner' => $banner,
        ]);
    }

//banner update
    function bannercontent_update(Request $request){
       $request->validate([
        'title_1' => 'required',
        'title_2' => 'required',
        'short_title' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'location' => 'required',
       ]);

       Banner::where('id',1)->update([
        'title_1' => $request->title_1,
        'title_2' => $request->title_2,
        'title_3' => $request->title_3,
        'short_title' => $request->short_title,
        'email' => $request->email,
        'phone' => $request->phone,
        'location' => $request->location,
    ]);
       return back();

    }

//Banner Image
    function banner_image(){
        $banner = Banner::all();
        return view('backend.banner.bannerimage',[
            'banner' => $banner ,
        ]);
    }
//banner image Update
    function bannerimage_update(Request $request){

        $image = Banner::where('id',1)->get()->first()->image;
        if($image == null){

            $request->validate([
                'bannerimage'=> 'required',
            ]);


            $bannerid = Banner::where('id',1)->get()->first()->id;
            $uploaded_file = $request->bannerimage;
            $extension = $uploaded_file->getClientOriginalExtension();
            $filename = $bannerid.'.'.$extension;

            Image::make($uploaded_file)->save(public_path('frontend_asset/assets/img/bg/'.$filename));


            Banner::where('id',1)->update([
                'image' => $filename,
            ]);

            return back();


        }
        else{

            $request->validate([
                'bannerimage'=> 'required',
            ]);

            $delete_from = public_path('frontend_asset/assets/img/bg/'.$image);
            unlink($delete_from);

            $bannerid = Banner::where('id',1)->get()->first()->id;
            $uploaded_file = $request->bannerimage;
            $extension = $uploaded_file->getClientOriginalExtension();
            $filename = $bannerid.'.'.$extension;

            Image::make($uploaded_file)->save(public_path('frontend_asset/assets/img/bg/'.$filename));

            Banner::where('id',1)->update([
                'image' => $filename,
            ]);

            return back();
        }


    }





}
