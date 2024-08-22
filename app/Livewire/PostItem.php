<?php

namespace App\Livewire;

use Livewire\Component;

class PostItem extends Component
{
    public $post;
    public function mount($post){
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.post-item');
    }
}
