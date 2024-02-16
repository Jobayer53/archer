<?php

namespace App\Livewire;
use App\Models\Education as modelEducation;
use Livewire\Component;

class Education extends Component
{
    public $title, $year, $shortDesp, $editTitle, $editYear, $editShortDesp, $education_id;
    public function render()
    {
        $eduData = modelEducation::orderBy('id', "desc")->get();
        return view('livewire.education.education',[ "eduData" => $eduData ]);
    }


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

        modelEducation::create([
            'title' => $this->title,
            'year' => $this->year,
            'description' => $this->shortDesp,
        ]);
        $this->reset();
        $this->dispatch('close-modal');

    }
//edit
    public function edit($id){
        $data = modelEducation::find($id);
        $this->education_id = $data->id;
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

        modelEducation::find($this->education_id)->update([
            'title' => $this->editTitle,
            'year' => $this->editYear,
            'description' => $this->editShortDesp,
        ]);
        $this->reset();
        $this->dispatch('close-modal');


    }

//status change
    public function status($id){
        $status = modelEducation::where('id', $id)->get()->first();
        $statusCount = modelEducation::where('status','=',1)->count();

            if($status->status == 0){
                modelEducation::find($id)->update([
                'status' => '1',
            ]);
            }else{
                if($statusCount <= 3 ){
                    session()->flash('status', 'Minimum 3 Education Required!');
                }else{
                    modelEducation::find($id)->update([
                        'status' => '0',
                    ]);
                }

            }




    }

//delete
    public function delete($id){
        modelEducation::find($id)->delete();
    }

    public function closeModal(){
        $this->reset();
        $this->resetValidation();
    }


}
