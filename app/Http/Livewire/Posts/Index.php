<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['deletePost'];

    public function deletePost($id)
    {
        Post::find($id)->delete();

        session()->flash('message', 'Post successfully deleted.');
    }

    public function render()
    {
        $posts = Post::paginate(5);

        return view('livewire.posts.index', ['posts' => $posts])
            ->extends('layouts.app')
            ->section('content');
    }
}
