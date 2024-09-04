<div>
    <div class="mb-4">
        <input wire:model="title" type="text" placeholder="Task title" class="border rounded p-2">
        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        <textarea wire:model="description" placeholder="Task description" class="border rounded p-2"></textarea>
        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
    @if($isEditMode)
            <button wire:click="updateTask" class="bg-blue-500 text-white p-2 rounded">Update Task</button>
        @else
            <button wire:click="storeTask" class="bg-green-500 text-white p-2 rounded">Create Task</button>
        @endif
    </div>

    <ul>
        @foreach($tasks as $task)
            <livewire:task-item :task="$task" :key="$task->id" />
        @endforeach
    </ul>
</div>
