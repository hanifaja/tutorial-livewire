<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Posts')]
#[\Livewire\Attributes\Lazy]

class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]
    public function updateList($post){

    }
    public function render()
    {
        $posts = \App\Models\Post::query()->with('user')->latest()->get();

        return view('livewire.posts.index',[
            'posts' => $posts,
        ]);
    }

    public function placeholder(){
        return <<<BLADE
            <div>
                Loading ...
            </div>
        BLADE;
    }


}
