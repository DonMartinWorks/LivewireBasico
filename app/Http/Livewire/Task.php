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

    //Para actualizar en tiempo real
    /**
     * aqui se colocan las reglas para verificar, pero para enviar en tiempo real ciertas reglas en especifico
     * En este caso para no decir que es required
     * y/o agregar una nuevas reglas
     */
    public function updatedTaskTitle()
    {
        //$this->validate(['task.title' => 'min:2|max:50']);
        $this->validate(['task.title' => 'max:50']);
    }

    //Para guardar una tarea
    public function save()
    {
        $this->validate(); // Recibe todas la reglas de validacion
        $this->task->save();

        $this->mount();

        $this->emitUp('taskSaved', 'Se realizó el guardado correctamente!');
    }

    //Para ver el componente task (livewire)
    public function render()
    {
        return view('livewire.task');
    }
}
