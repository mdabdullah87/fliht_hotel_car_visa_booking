<?php

namespace App\Livewire;
use App\Models\visa as ModelsVisa;
use Livewire\Component;

class Addvisa extends Component
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

        
        return view('livewire.addvisa');
    }
}
