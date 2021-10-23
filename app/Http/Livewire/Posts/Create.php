<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title, $post_text;

    protected $rules = [
        'title' => 'required',
        'post_text' => 'required',
    ];

    public function store()
    {
        Post::create($this->validate());

        session()->flash('message', 'Post successfully created.');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.create')
            ->extends('layouts.app')
            ->section('content');
    }
}
