<?php

namespace App\Livewire;
use App\Models\hotel as ModelsHotel;
use Livewire\Component;

class Addhotel extends Component
{


    
    public $country = '';
    public $hotel = '';


    public function store(){

            ModelsHotel::create([
                'country' => $this->country,
                'hotel' => $this->hotel,

            ]);
    }

    public function render()
    {
        return view('livewire.addhotel');
    }
}
