<?php

namespace App\Livewire;

use App\Models\hotel as ModelsHotel;
use Livewire\Component;

class Hotel extends Component
{

    public $country = '';
    public $hotel = '';


    public function store(){

            ModelsHotel::create([
                'country' => $this->country,
                'hotel' => $this->hotel,

            ]);

            $this->reset();
    }


    public function render()
    {

        $hotels = ModelsHotel::all();
        $c = count($hotels);
        return view('livewire.hotel',compact('hotels','c'));
    }
}
