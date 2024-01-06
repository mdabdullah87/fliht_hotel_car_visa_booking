<?php

namespace App\Livewire;

use App\Models\car as ModelsCar;
use Livewire\Component;

class Car extends Component
{


    public $origin = '';

    public function store(){

            ModelsCar::create([
                'origin' => $this->origin,
            ]);
    }

    public function render()
    {

        $cars = ModelsCar::all();
        $c = count($cars);
        return view('livewire.car',compact('cars','c'));
    }
}
