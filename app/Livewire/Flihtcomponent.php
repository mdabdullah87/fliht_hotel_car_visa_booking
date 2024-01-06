<?php

namespace App\Livewire;

use App\Models\fliht;
use Livewire\Component;

class Flihtcomponent extends Component
{

   
    public $origin = '';

    
     //Input filds on updated validation//
     public function updated($fields){

        $data = $this->validateOnly($fields,[

             'origin' => 'unique:flihts|required',
         ],[

                'required' => "Please type origin",
                'string' => "Origin must be string",
         ]);
 }

    public function store(){

        $this->validate([
            'origin' => 'required|min:6',
        ],[
            'required' => 'Please type origin',
        ]);

            fliht::create([
                'origin' => $this->origin,
            ]);

            $this->reset('origin');
            session()->flash('origin', 'Origin successfully Added!.');
            
            $this->dispatchBrowserEvent('closeModal');
    }

    public function render()

    {
        $flihts = fliht::all();
        $c = count($flihts);
        return view('livewire.flihtcomponent',compact('flihts','c'));
    }
}
