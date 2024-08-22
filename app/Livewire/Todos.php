<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todos = [];
    public $todo = '';
    public function render()
    {
        return view('livewire.todos');
    }
}
