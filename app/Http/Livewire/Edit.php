<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $param, $name, $founded, $description, $file, $hiddenId;
    use WithFileUploads;

    protected $rules = [
        'name'=>'required',
        'founded'=>'required|integer|min:0|max:2023',
        'file'=>'required|mimes:png,jpg,jpeg|max:5048',
        'description'=>'required'
    ];

    public function update()
    {
        $updateId = $this->hiddenId;
        $validatedData = $this->validate();

        $filename = $this->file->store('file', 'public');
        $validatedData['file'] = $filename;

        DB::table('cars')->where('id', $updateId )->update($validatedData);
            session()->flash('success','file is updated');
    }
    public function mount($param)
    {
        $this->param = $param;
        $singleData = Car::find($param);
        $this->name = $singleData->name;
        $this->founded = $singleData->founded;
        $this->description = $singleData->description;
        $this->file = $singleData->file;
        $this->hiddenId = $singleData->id;
    }
    public function render()
    {
        return view('livewire.edit');
    }
}
