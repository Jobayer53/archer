<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Client as ModelsClient;

class Client extends Component
{
    use WithFileUploads;
    public $image, $name, $comment, $profession, $oldImage, $client_id, $editName, $editProfession, $editComment, $editImage;
    public $read = false;
    public $read_more ,$clients;
    // public function render()
    // {   $this->clients = ModelsClient::all();
    //     return view('livewire.client.client', ['clients' => $this->clients] );
    // }
/// edit data

    public $showFullContent = [];

    public function mount()
    {
        // Eager load relationships if applicable
        $this->clients = ModelsClient::all();
        $this->showFullContent = array_fill_keys($this->clients->pluck('id')->toArray(), false);
    }

    public function toggleShowFullContent($modelId)
    {
        if (!array_key_exists($modelId, $this->showFullContent)) {
            $this->showFullContent[$modelId] = false; // Add the key if missing
        }
        $this->showFullContent[$modelId] = !$this->showFullContent[$modelId];
    }


    public function render()
    {
        return view('livewire.client.client', [
            'models' => $this->clients,
        ]);
    }

// edit

// insert
    public function store(){
        $this->validate([
            'name' => 'required',
            'profession' => 'required',
            'comment' => 'required',

        ]);

        if($this->image){
            $extension = $this->image->getClientOriginalExtension();
            $file_name = "client_image_".(Str::random(9)).rand('0', 9999).'.'.$extension;
            $this->image->storeAs('uploads/client/', $file_name, 'public');

            ModelsClient::create([
                'name' => $this->name,
                'profession' => $this->profession,
                'comment' => $this->comment,
                'image' => $file_name,
            ]);
        }
        else{
            ModelsClient::create([
                        'name' => $this->name,
                        'profession' => $this->profession,
                        'comment' => $this->comment,
                    ]);
        }
       $this->reset();
       $this->dispatch('close-modal');

    }
//edit
public function edit($id){
    $data = ModelsClient::find($id);
    $this->client_id = $data->id;
    $this->editName = $data->name;
    $this->editProfession = $data->profession;
    $this->editComment = $data->comment;
    $this->oldImage = $data->image;
}
//update
public function update(){
    $this->validate([
        'editName' => 'required',
        'editProfession' => 'required',
        'editComment' => 'required',

    ]);
    $client_data = ModelsClient::where('id' , $this->client_id)->get();
    if($this->editImage){

        $file_path = public_path('uploads/client/'.$client_data->first()->image);
        unlink($file_path);

        $extension = $this->editImage->getClientOriginalExtension();
        $file_name = "client_image_".(Str::random(9)).rand('0', 9999).'.'.$extension;
        $this->editImage->storeAs('uploads/client/', $file_name, 'public');

        ModelsClient::where('id', $this->client_id)->update([
            'name' => $this->editName,
            'profession' => $this->editProfession,
            'comment' => $this->editComment,
            'image' => $file_name,
        ]);
    }
    else{
        ModelsClient::where('id', $this->client_id)->update([
            'name' => $this->editName,
            'profession' => $this->editProfession,
            'comment' => $this->editComment,
        ]);
    }

    $this->reset();
    $this->dispatch('close-modal');

}
//delete
    public function delete($id){
        $client_data = ModelsClient::where('id' , $id)->get();
        if($client_data->first()->image){
            $file_path = public_path('uploads/client/'.$client_data->first()->image);
            unlink($file_path);
            ModelsClient::find($id)->delete();
        }
        else{
           ModelsClient::find($id)->delete();
        }


    }

    public function closeModal(){
        $this->reset();
        $this->resetValidation();
    }



// //read more
//     public function readMore($id){

//         $this->read = !$id;

//     }
    // public function readLess(){
    //     $this->read = false;

    // }


///
// public $paragraphs;
// public $expanded = [];

//     public function mount()
//     {
//         $this->paragraphs = ModelsClient::all();  // Replace 'Paragraph' with your model name
//     }



}
