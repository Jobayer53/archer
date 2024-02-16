<?php

namespace App\Livewire;

use App\Models\Service as ModelService;
use Livewire\Component;

class Service extends Component
{

    public $serial, $title, $shortDesp, $editSerial, $editTitle, $editShortDesp,$service_id;
    public function render()
    {
        $services = ModelService::orderBy('serial', 'asc')->get();
        return view('livewire.service.service',['services'=>$services]);
    }

//insert
public function store(){
    $this->validate([
        'serial' => 'required',
        'title'=> 'required|max:20',
        'shortDesp' => 'required|max:100',
    ],[
        'title.max' => 'Maximum 20 Letters! ',
        'shortDesp.max' => 'Maximum 100 Letters! ',
    ]);

    ModelService::create([
        'serial' => $this->serial,
        'title' => $this->title,
        'description' => $this->shortDesp,
    ]);
    $this->reset();
    $this->dispatch('close-modal');

}
//edit
public function edit($id){
    $data = ModelService::find($id);
    $this->service_id = $data->id;
    $this->editSerial = $data->serial;
    $this->editTitle = $data->title;
    $this->editShortDesp = $data->description;

}
//update
public function update(){
    $this->validate([
        'editSerial' => 'required',
        'editTitle'=> 'required|max:20',
        'editShortDesp' => 'required|max:100',
    ],[
        'editTitle.max' => 'Maximum 20 Letters! ',
        'editShortDesp.max' => 'Maximum 100 Letters! ',
    ]);

    ModelService::find($this->service_id)->update([
        'serial' => $this->editSerial,
        'title' => $this->editTitle,
        'description' => $this->editShortDesp,
    ]);
    $this->reset();
    $this->dispatch('close-modal');


}

//status change
public function status($id){
    $status = ModelService::where('id', $id)->get()->first();
    $statusCount = ModelService::where('status','=',1)->count();

        if($status->status == 0){
            ModelService::find($id)->update([
            'status' => '1',
        ]);
        }else{
            if($statusCount <= 3 ){
                session()->flash('status', 'Minimum 3 Experience Required!');
            }else{
                ModelService::find($id)->update([
                    'status' => '0',
                ]);
            }

        }




}

//delete
public function delete($id){
    ModelService::find($id)->delete();
}

public function closeModal(){
    $this->reset();
    $this->resetValidation();
}




}
