<div class="flex justify-between items-center">
    <div>
        <h2 class="text-lg">{{ $task->title }}</h2>
        <p>{{ $task->description }}</p>
    </div>
    <div>
        <button wire:click="deleteTask" class="bg-red-500 text-white p-2 rounded">Delete</button>
    </div>
</div>
