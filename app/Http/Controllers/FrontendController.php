<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;




class FrontendController extends Controller
{
    function index(){
        $about = About::all();
        $banner = Banner::all();
        return view('frontend.index',[
            'banner' => $banner,
            'about' => $about,
        ]);
    }
    function work(){
        return view('frontend.work_single');
    }
    function blog(){
        return view('frontend.blog_single');
    }


//download cv
// function download_cv(){
//     $file = public_path('files/cv.pdf');
//     return response()->download($file);
// }

    function download_cv(){
        $about_data = About::all();
        $banner_data = Banner::all();
        $pdf = Pdf::loadView('frontend/files/download_cv',[
            'about_data' => $about_data,
            'banner_data' => $banner_data,
        ]);
        return $pdf->stream();
        // return $pdf->download('CV.pdf');



    }


}
