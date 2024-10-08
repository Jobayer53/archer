<?php

namespace App\Http\Controllers;


use App\Models\Work;
use App\Models\About;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Education;
use App\Models\Experience;
use App\Notifications\Contact as NotificationsContact;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Notification;




class FrontendController extends Controller
{
    function index(){

        $about = About::all();
        $banner = Banner::all();
        $clients = Client::all();
        $experiences = Experience::where('status','=', 1)->get();
        $educations = Education::where('status','=', 1)->get();

        //services data
        $services = null;
        $servicesCount = Service::where('status','=', 1)->count();
        if($servicesCount < 6 ){
            $services = Service::where('status','=', 1)->orderBy('serial','asc')->take(3)->get();
        }elseif($servicesCount >= 6 && $servicesCount < 9 ){
            $services = Service::where('status','=', 1)->orderBy('serial','asc')->take(6)->get();
        }elseif($servicesCount >= 9 && $servicesCount < 12){
            $services = Service::where('status','=', 1)->orderBy('serial','asc')->take(9)->get();
        }
        // services data end here

        // work start here
        $works = null;
        $workCount = Work::where('status','=',1)->count();
        if($workCount < 6){
            $works = Work::where('status', '=', 1)->orderBy('id', 'asc')->take(3)->get();
        }elseif($workCount >= 6 && $workCount < 9 ){
            $works = Work::where('status','=', 1)->orderBy('id','asc')->take(6)->get();
        }elseif($workCount >= 9 && $workCount < 12){
            $works = Work::where('status','=', 1)->orderBy('id','asc')->take(9)->get();
        }
        //work ends here

        return view('frontend.index',[
            'banner' => $banner,
            'about' => $about,
            'experiences' => $experiences,
            'educations' => $educations,
            'services' => $services,
            'works' => $works,
            'clients' => $clients,
        ]);
    }

    function blog_detail(){
        return view('frontend.blog_single');
    }
    //work detail page
    function work_detail($id){
        $works = Work::with('project_images')->where('id', $id)->get()->first();
        $about = About::first();
        return view('frontend.work_single', ['works'=>$works, 'about' => $about]);
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
    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $contact= new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject?? 'N/A';
        $contact->message = $request->message;
        $contact->save();
        $name = $request->name;
        Notification::route('mail', 'unknown327523@gmail.com')->notify(new NotificationsContact($name));
        return back() // Redirect to the named route
        ->with('success', 'Thanks for contacting me! I will reply as soon as possible.');
       // Add a custom flag to indicate scrolling
    }


}
