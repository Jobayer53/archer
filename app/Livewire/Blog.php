<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;
    public $content = null;
    public function render()
    {
        $blogs = ModelsBlog::orderBy('id','desc')->get();
        return view('livewire.blog.blog',[
            'blogs' => $blogs,
        ]);
    }

    public function closeModal(){
        $this->content = null;
        $this->reset();
        $this->resetValidation();
    }

    public function blogContent($id){
        $blogs = ModelsBlog::find($id);
        $this->content=  $blogs->blog_content;
    }

    //status change
    public function status($id){
        $status = ModelsBlog::where('id', $id)->get()->first();
        $statusCount = ModelsBlog::where('status','=',1)->count();

            if($status->status == 0){
                ModelsBlog::find($id)->update([
                'status' => '1',
            ]);
            }else{
                if($statusCount <= 2 ){
                    session()->flash('status', 'Minimum 2 blog Required!');
                }else{
                    ModelsBlog::find($id)->update([
                        'status' => '0',
                    ]);
                }
            }
    }

//delete
public function delete($id){

    $blog_data = ModelsBlog::where('id',$id)->get();
    $file_path = public_path('uploads/blog/'.$blog_data->first()->thumbnail);
    unlink($file_path);
    ModelsBlog::find($id)->delete();
}



}
