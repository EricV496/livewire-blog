<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $isOpen = false;
    public $title, $content;
    
    protected $rules = [
        'title' => 'required|max:10',
        'content' => 'required|min 100'
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['isOpen', 'title', 'content']);
        $this->dispatch('render')->to('show-posts');
        $this->dispatch('alert', 'El post se creo satisfactoriamente');
    }

}
