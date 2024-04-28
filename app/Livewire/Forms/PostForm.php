<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';

    public function store(){
        
        $post = Auth::user()->posts()->create(
            $this->validate()
        );
        session()->flash('message','sukses kawan ku');
        $this->reset();

        return $post;
    }
}
