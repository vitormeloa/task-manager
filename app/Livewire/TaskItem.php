<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskItem extends Component
{
    public $task;

    public function render()
    {
        return view('livewire.task-item');
    }

    public function deleteTask()
    {
        $this->task->delete();
        session()->flash('message', 'Task deleted successfully.');
    }
}
