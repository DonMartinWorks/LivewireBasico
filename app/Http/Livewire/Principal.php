<?php

namespace App\Http\Livewire;

use Livewire\Component;

# Tmabien LLamado Main
class Principal extends Component
{
    public $welcome = "Tus tareas";

    protected $listeners = ['taskSaved'];

    public function taskSaved($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        return view('livewire.principal');
    }
}
