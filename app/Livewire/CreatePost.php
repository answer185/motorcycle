<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $posts = [];
    public $title = "post page";
    public $author = "Jack Zeng";

    public $inputVal = "22";
    public $inputVal2 = "33";
    public $postTitle = "";

    public function save() {
        $post = ['title' => $this->postTitle];
        return redirect()->to('/lw/posts')->with('status','Post Created!');
    }
    public function render()
    {
        $this->posts = [
            (Object)["id" => 1, "name" => "lili 1"],
            (Object)["id" => 2, "name" => "lili 2"],
        ];
        return view('livewire.create-post');
    }
}
