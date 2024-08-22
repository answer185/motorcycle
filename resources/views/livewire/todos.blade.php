<div>
    <input type="text" wire:model="todo">
 
    Todo character length: <h2 x-text="$wire.todo.length"></h2>

    <button x-on:click="$wire.set('todo', '')">Clear</button>

    <button
        type="button"
        wire:click="delete"
        wire:confirm="Are you sure you want to delete this post?"
    >
        Delete post 
    </button>

    <form wire:submit="save">
        <textarea wire:model="content"></textarea>
    
        <button type="submit">Save</button>
    
        <span wire:loading>Saving...</span> 
    </form>
</div>
