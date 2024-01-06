<?php

namespace App\Livewire;
use App\Models\car as ModelsCar;
use Livewire\Component;

class Addcar extends Component
{


    public $origin = '';

    public function store(){

        ModelsCar::create([
                'origin' => $this->origin,
            ]);

            $this->reset('origin');
    }


    public function render()
    {
        return view('livewire.addcar');
    }
}
