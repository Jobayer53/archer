<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    public function index(){
        $works = Blog::orderBy('id','desc')->get();
        return view('backend.blog.blog',compact('works'));
    }
    public function blog_create(){
        return view('backend.blog.create');
    }
//insert
    public function blog_store(Request $request){

        $request->validate([
            'title'         => 'required',
            'date'          => 'required',
            'tag'           => 'required|max:20',
            'content'       => 'required',
            'readTime'      => 'required|max:20',
            'thumbnail'     => 'required',
        ],[
            'tag.max' => 'Maximum 20 Letters! ',
            'readTime.max' => 'Maximum 20 Letters! ',
        ]);

        $uploaded_file = $request->thumbnail;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = "image_work_".(Str::random(6)).rand('0','999999').'.'.$extension;
        Image::make($uploaded_file)->save(public_path('uploads/blog/'.$file_name));

        Blog::create([
            'title'         => $request->title,
            'date'          => $request->date,
            'tag'           => $request->tag,
            'read_time'     => $request->readTime,
            'blog_content'  => $request->content,
            'thumbnail'     => $file_name,
        ]);

        return redirect(route('blog'));

    }
    public function blog_edit($id){
        $blogs = Blog::find($id);
        return view('backend.blog.edit',[
            'blogs' => $blogs,
        ]);
    }
    public function blog_update(Request $request){
        $request->validate([
            'title'         => 'required',
            'date'          => 'required',
            'tag'           => 'required|max:20',
            'content'       => 'required',
            'readTime'      => 'required|max:20',
        ],[
            'tag.max' => 'Maximum 20 Letters! ',
            'readTime.max' => 'Maximum 20 Letters! ',
        ]);

        if($request->thumbnail){

            $blog_data = Blog::where('id',$request->blog_id)->get();
            $file_path = public_path('uploads/blog/'.$blog_data->first()->thumbnail);
            unlink($file_path);

            $uploaded_file = $request->thumbnail;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = "image_work_".(Str::random(6)).rand('0','999999').'.'.$extension;
            Image::make($uploaded_file)->save(public_path('uploads/blog/'.$file_name));

            Blog::where('id',$request->blog_id)->update([
                'title'         => $request->title,
                'date'          => $request->date,
                'tag'           => $request->tag,
                'read_time'     => $request->readTime,
                'blog_content'  => $request->content,
                'thumbnail'     => $file_name,
            ]);
        }else{
            Blog::where('id',$request->blog_id)->update([
                'title'         => $request->title,
                'date'          => $request->date,
                'tag'           => $request->tag,
                'read_time'     => $request->readTime,
                'blog_content'  => $request->content,

            ]);
        }

        return redirect(route('blog'));
    }




}
