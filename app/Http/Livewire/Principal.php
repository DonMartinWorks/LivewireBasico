<?php

namespace App\Http\Livewire;

use Livewire\Component;

# Tmabien LLamado Main
class Principal extends Component
{
    public $welcome = "Tus tareas";

    public function render()
    {
        return view('livewire.principal');
    }
}
