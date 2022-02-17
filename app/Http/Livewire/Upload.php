<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Image;

class Upload extends Component
{

    use WithFileUploads;
    public $photo;
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos' , 's4');
        


    }





    public function render()
    {
        return view('livewire.upload');
    }
}
