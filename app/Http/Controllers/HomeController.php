<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Image;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
//users
    function users(){
        $total_users = User::count();
        $users = User::where('id','!=',Auth::id())->get();
        return view('backend.users.user', compact('users', 'total_users'));
    }
//user delte
    function user_delete($user_id){
        User::find($user_id)->delete();
        return back();
    }
// User Profile
    function profile(){
        return view('backend.users.profile');
    }
//update
    function profile_update(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]);
        if($request->current_password == ''){
            User::find(Auth::user()->id)->update([
                'name'=> $request->name,
                'email'=> $request->email,
            ]);
            return back();

        }else {
            if(Hash::check($request->current_password, Auth::user()->password)){
                if($request->new_password == $request->confirm_password){
                    $request->validate([
                        'new_password' => [
                            'required',
                            'string',
                            'min:8', // Minimum length of the password
                            'confirmed',
                            'regex:/[A-Za-z0-9]/',
                        ],
                    ]);
                    User::find(Auth::user()->id)->update([
                        'name'=> $request->name,
                        'email'=> $request->email,
                        'password'=>$request->confirm_password,
                    ]);
                    return back();
                }else{
                    return back()->with('confirmpassword_notmatch','Confirm Password Not Match');
                }

            }else{
                return back()->with('currentpassword_notmatch','Current Password Not Match');
            }
        }
    }


//profile Image
    function profileimage_update(Request $request){
        $image= Auth::user()->image;
        if($image == null){
            $request->validate([
                'profile_image' => 'required | mimes:jpg,gif,webp,png,jpeg | file|max:512',
            ]);

            $uploaded_file = $request->profile_image;

            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = Auth::id().'.'.$extension;
            Image::make($uploaded_file)->save(public_path('uploads/user/'.$file_name));

            User::find(Auth::id())->update([
                'image' => $file_name,
            ]);
            return back();
        }
        else{
            $request->validate([
                'profile_image' => 'required | mimes:jpg,gif,webp,png,jpeg | file|max:512',
            ]);
            $delete_from = public_path('uploads/user/'.$image);
            unlink($delete_from);

            $uploaded_file = $request->profile_image;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = Auth::id().'.'.$extension;
            Image::make($uploaded_file)->save(public_path('uploads/user/'.$file_name));

            User::find(Auth::id())->update([
                'image' => $file_name,
            ]);
            return back();
        }
    }











}
