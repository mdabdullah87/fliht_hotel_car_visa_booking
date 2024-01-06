<?php

namespace App\Livewire;

use App\Models\visa as ModelsVisa;
use Livewire\Component;

class Visa extends Component
{

     
    public $origin = '';

    public function store(){

            ModelsVisa::create([
                'origin' => $this->origin,
            ]);

            $this->reset('origin');
    }


    public function render()
    {
        $visas = ModelsVisa::all();
        $c = count($visas);

        return view('livewire.visa',compact('visas','c'));
    }
}
