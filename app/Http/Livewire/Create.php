<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $name, $founded, $description, $file, $hiddenId;
    use WithFileUploads;

    // protected $rules = [
    //     'name'=>'required|unique:cars',
    //     'founded'=>'required|integer|min:0|max:2023',
    //     'file'=>'required|mimes:png,jpg,jpeg|max:5048',
    //     'description'=>'required'
    // ];

    protected function rules()
    {
        return [
            'name'=>'required|unique:cars',
            'founded'=>'required|integer|min:0|max:2023',
            'file'=>'required|mimes:png,jpg,jpeg|max:5048',
            'description'=>'required'
        ];
    }
    public function save()
    {
        // $validatedData = $this->validate([
        //     'name'=>'required|unique:cars',
        //     'founded'=>'required|integer|min:0|max:2023',
        //     'file'=>'required|mimes:png,jpg,jpeg|max:5048',
        //     'description'=>'required'
        // ]);
        $validatedData = $this->validate();

        $filename = $this->file->store('file', 'public');
        $validatedData['file'] = $filename;

        // $updateId = $this->hiddenId;

        // if ($updateId > 0) {
            // update
            // $updateArray = array(
            //     'name'=>$validatedData['name'],
            //     'founded'=>$validatedData['founded'],
            //     'file'=>$validatedData['file'],
            //     'description'=>$validatedData['description']
            // );
            // DB::table('cars')->where('id', $updateId )->update($updateArray);
            // session()->flash('success','file is updated');

        // } else {
            Car::create($validatedData);
            session()->flash('success','file is uploaded');
        // }
        

    }
  
    public function render()
    {

        return view('livewire.create');
    }
}
