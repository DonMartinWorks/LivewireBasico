<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $tasks;

    //Para cargar la data mientras carga el componente
    public function mount()
    {
        $this->tasks = \App\Models\Task::get();
    }

    //Para ver el componente task (livewire)
    public function render()
    {
        return view('livewire.task');
    }
}
