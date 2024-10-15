<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $isOpen = false;
    public $title, $content;
    
    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(){
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['isOpen', 'title', 'content']);
        $this->dispatch('render')->to('show-posts');
        $this->dispatch('alert', 'El post se creo satisfactoriamente');
    }

}
