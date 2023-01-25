<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;

    //Para alojar el objeto de la nueva tarea
    public TaskModel $task;

    //Reglas
    protected $rules = ['task.title' => 'required|max:50'];

    //Para cargar la data mientras carga el componente
    public function mount()
    {
        // $this->tasks = TaskModel::get(); //Orden normal
        $this->tasks = TaskModel::orderBy('id', 'desc')->get(); //Orden mayor a menor
        $this->task = new TaskModel();
    }

    //Para guardar una tarea
    public function save()
    {
        $this->validate();
        $this->task->save();

        $this->mount();
        session()->flash('message', 'Se creó la nueva tarea');
    }

    //Para ver el componente task (livewire)
    public function render()
    {
        return view('livewire.task');
    }
}
