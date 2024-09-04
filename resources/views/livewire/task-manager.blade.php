<div>
    <div class="mb-4">
        <input wire:model="title" type="text" placeholder="Task title" class="border rounded p-2">
        <textarea wire:model="description" placeholder="Task description" class="border rounded p-2"></textarea>
        @if($isEditMode)
            <button wire:click="updateTask" class="bg-blue-500 text-white p-2 rounded">Update Task</button>
        @else
            <button wire:click="storeTask" class="bg-green-500 text-white p-2 rounded">Create Task</button>
        @endif
    </div>

    <ul>
        @foreach($tasks as $task)
            <li class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg">{{ $task->title }}</h2>
                    <p>{{ $task->description }}</p>
                </div>
                <div>
                    <button wire:click="editTask({{ $task->id }})" class="bg-yellow-500 text-white p-2 rounded">Edit</button>
                    <button wire:click="deleteTask({{ $task->id }})" class="bg-red-500 text-white p-2 rounded">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
