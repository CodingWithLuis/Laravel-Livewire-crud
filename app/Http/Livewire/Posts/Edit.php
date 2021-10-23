<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public Post $post;

    public $title;
    public $post_text;

    public function mount()
    {
        $this->title = $this->post->title;
        $this->post_text = $this->post->post_text;
    }

    protected $rules = [
        'title' => [
            'required'
        ],
        'post_text' => [
            'required'
        ]
    ];

    public function update()
    {
        $this->post->update($this->validate());

        session()->flash('message', 'Post successfully updated.');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.edit')
            ->extends('layouts.app')
            ->section('content');
    }
}
