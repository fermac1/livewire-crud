<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Show extends Component
{
    // public $car=[];
    public function add()
    {
        return view('livewire.create');
    }
    public function edit($id)
    {
        $singleData = Car::find($id);
        return view('livewire.create');
    }
    public function delete($id)
    {
        DB::table('cars')->where('id', $id )->delete();
        session()->flash('success', 'deleted successfully');
    }
    public function render()
    {
        // $this->car = Car::all();
        $car = Car::inRandomOrder()->get();
        return view('livewire.show',['car'=>$car]);
    }
}
