<?php

namespace App\Livewire;

use App\Models\Experience as modelExperience;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Experience extends Component
{
    public $title, $year, $shortDesp, $editTitle, $editYear, $editShortDesp, $experience_id;

    public function render()
    {   $expData = modelExperience::orderBy('id', 'DESC')->get();
        return view('livewire.experience.experience', ["expData" => $expData]);
    }

//insert
    public function store(){
        $this->validate([
            'title'=> 'required|max:40',
            'year' => 'required|max:15',
            'shortDesp' => 'required|max:150',
        ],[
            'title.max' => 'Maximum 40 Letters! ',
            'year.max' => 'Maximum 15 Letters! ',
            'shortDesp.max' => 'Maximum 150 Letters! ',
        ]);

        modelExperience::create([
            'title' => $this->title,
            'year' => $this->year,
            'description' => $this->shortDesp,
        ]);
        $this->reset();
        $this->dispatch('close-modal');

    }
//edit
    public function edit($id){
        $data = modelExperience::find($id);
        $this->experience_id = $data->id;
        $this->editTitle = $data->title;
        $this->editYear = $data->year;
        $this->editShortDesp = $data->description;

    }
//update
    public function update(){
        $this->validate([
            'editTitle'=> 'required|max:40',
            'editYear' => 'required|max:15',
            'editShortDesp' => 'required|max:150',
        ],[
            'editTitle.max' => 'Maximum 40 Letters! ',
            'editYear.max' => 'Maximum 15 Letters! ',
            'editShortDesp.max' => 'Maximum 150 Letters! ',
        ]);

        modelExperience::find($this->experience_id)->update([
            'title' => $this->editTitle,
            'year' => $this->editYear,
            'description' => $this->editShortDesp,
        ]);
        $this->reset();
        $this->dispatch('close-modal');


    }

//status change
    public function status($id){
        $status = modelExperience::where('id', $id)->get()->first();
        $statusCount = modelExperience::where('status','=',1)->count();

            if($status->status == 0){
                modelExperience::find($id)->update([
                'status' => '1',
            ]);
            }else{
                if($statusCount <= 3 ){
                    session()->flash('status', 'Minimum 3 Experience Required!');
                }else{
                     modelExperience::find($id)->update([
                        'status' => '0',
                    ]);
                }

            }




    }

//delete
    public function delete($id){
        modelExperience::find($id)->delete();
    }

    public function closeModal(){
        $this->reset();
        $this->resetValidation();
    }




}
