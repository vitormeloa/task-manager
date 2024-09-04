<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskManager extends Component
{
    public $tasks, $title, $description, $taskId;
    public $isEditMode = false;

    public function render()
    {
        $this->tasks = Task::all();
        return view('livewire.task-manager');
    }

    public function createTask()
    {
        $this->reset(['title', 'description']);
        $this->isEditMode = false;
    }

    public function storeTask()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Task created successfully.');
    }

    public function editTask($id)
    {
        $task = Task::findOrFail($id);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->isEditMode = true;
    }

    public function updateTask()
    {
        $task = Task::findOrFail($this->taskId);
        $task->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset(['title', 'description']);
        $this->isEditMode = false;

        session()->flash('message', 'Task updated successfully.');
    }

    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();
        session()->flash('message', 'Task deleted successfully.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
    }
}
