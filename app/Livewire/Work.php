<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\ProjectImage;
use Livewire\WithFileUploads;
use App\Models\Work as ModelsWork;
use Illuminate\Support\Facades\Log;

class Work extends Component
{


    use WithFileUploads;

    public $title, $client, $date, $url, $categorie, $technologie, $tag, $description,$image, $editTitle, $editClient, $editDate, $editUrl, $editCategorie, $editTechnologie, $editTag, $editDescription, $editImage, $work_id, $oldImage,$readMoreDesp ;
    public $images=[];

    public $workId;


//insert
public function store(){
    $this->validate([
        'title'         => 'required|max:20',
        'client'        => 'required',
        'date'          => 'required',
        'url'           => 'required',
        'categorie'     => 'required|max:50',
        'technologie'    => 'required|max:100',
        'tag'           => 'required|max:50',
        'description'   => 'required',
        'image'         => 'required',
    ],[
        'title.max' => 'Maximum 20 Letters! ',
        'categorie.max' => 'Maximum 50 Letters! ',
        'technologie.max' => 'Maximum 100 Letters! ',
        'tag.max' => 'Maximum 50 Letters! ',
    ]);

    $extension = $this->image->getClientOriginalExtension();
    $file_name = "image_work_".(Str::random(6)).rand('0','999999').'.'.$extension;
    $this->image->storeAs('uploads/work/', $file_name, 'public');

    ModelsWork::create([
        'title'         => $this->title,
        'client'        => $this->client,
        'date'          => $this->date,
        'url'           => $this->url,
        'categorie'     => $this->categorie,
        'technologie'    => $this->technologie,
        'tags'           => $this->tag,
        'description'   => $this->description,
        'image'         => $file_name,
    ]);
    $this->reset();
    $this->dispatch('close-modal');

}
//edit
public function edit($id){
    $data = ModelsWork::find($id);
        $this->work_id = $data->id;
        $this->editTitle  = $data->title;
        $this->editClient  = $data->client;
        $this->editDate  = $data->date;
        $this->editUrl  = $data->url;
        $this->editCategorie  = $data->categorie;
        $this->editTechnologie  = $data->technologie;
        $this->editTag  = $data->tags;
        $this->editDescription  = $data->description;
        $this->oldImage = $data->image;

}
//update
public function update(){
    $this->validate([
        'editTitle' =>    'required|max:20',
        'editClient' =>   'required',
        'editDate' => 'required',
        'editUrl' =>    'required',
        'editCategorie' =>  'required|max:50',
        'editTechnologie' =>   'required|max:100',
        'editTag' => 'required|max:50',
        'editDescription' => 'required',
    ],[
        'editTitle.max' => 'Maximum 20 Letters! ',
        'editCategorie.max' => 'Maximum 50 Letters! ',
        'editTechnologie.max' => 'Maximum 100 Letters! ',
        'editTag.max' => 'Maximum 50 Letters! ',
    ]);


    if($this->editImage){
        $work_data = ModelsWork::where('id' , $this->work_id)->get();
        $file_path = public_path('uploads/work/'.$work_data->first()->image);
        unlink($file_path);

        $extension = $this->editImage->getClientOriginalExtension();
        $file_name = "image_work_".(Str::random(6)).rand('0','999999').'.'.$extension;
        $this->editImage->storeAs('uploads/work/', $file_name, 'public');

        ModelsWork::find($this->work_id)->update([
            'title'         =>    $this->editTitle    ,
            'client'        =>    $this->editClient   ,
            'date'          =>    $this->editDate     ,
            'url'           =>    $this->editUrl      ,
            'categorie'     =>    $this->editCategorie  ,
            'technologie'    =>    $this->editTechnologie,
            'tags'           =>    $this->editTag,
            'description'   =>    $this->editDescription  ,
            'image'         =>    $file_name,
        ]);
        $this->reset();
        $this->dispatch('close-modal');
    }
    else{

        ModelsWork::find($this->work_id)->update([
            'title'         =>    $this->editTitle    ,
            'client'        =>    $this->editClient   ,
            'date'          =>    $this->editDate     ,
            'url'           =>    $this->editUrl      ,
            'categorie'     =>    $this->editCategorie  ,
            'technologie'    =>    $this->editTechnologie ,
            'tags'           =>    $this->editTag  ,
            'description'   =>    $this->editDescription  ,

        ]);
        $this->reset();
        $this->dispatch('close-modal');
    }

}

//status change
public function status($id){
    $status = ModelsWork::where('id', $id)->get()->first();
    $statusCount = ModelsWork::where('status','=',1)->count();

        if($status->status == 0){
            ModelsWork::find($id)->update([
            'status' => '1',
        ]);
        }else{
            if($statusCount <= 3 ){
                session()->flash('status', 'Minimum 3 Experience Required!');
            }else{
                ModelsWork::find($id)->update([
                    'status' => '0',
                ]);
            }

        }



}

//delete
public function delete($id){

    $work_data = ModelsWork::where('id' , $id)->get();
    $file_path = public_path('uploads/work/'.$work_data->first()->image);
    unlink($file_path);
    ModelsWork::find($id)->delete();
}

public function closeModal(){
    $this->reset();
    $this->resetValidation();
}

public function readMore($id){
    $work = ModelsWork::find($id);
    $this->readMoreDesp = $work->description;
}

public function storeImage()
{


    if (empty($this->images)) {
        session()->flash('message', 'No images selected.');
        return;
    }

    foreach ($this->images as $image) {
        $extension = $image->getClientOriginalExtension();
        $file_name = "PROJECT-IMAGE-".(Str::random(6)).rand('0','999999').'.'.$extension;
        $image->storeAs('uploads/project-image/', $file_name, 'public');

        $project_image = new ProjectImage();
        $project_image->image = $file_name;
        $project_image->project_id = $this->workId;
        $project_image->save();

        $this->reset();
        $this->dispatch('close-modal');
    }
}

public function render()
{   $works = ModelsWork::all();
    return view('livewire.work.work', ["works" => $works]);
}

}
