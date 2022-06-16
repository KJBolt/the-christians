<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewLetter;


class Subscribe extends Component
{
    public $email;

    public function resetInputs(){
        $this->email = "";
    }

    protected $rules = [
        'email' => 'required|email|unique:new_letters'
    ];

    public function submit(){
        $data = $this->validate();
        NewLetter::create($data);
        $this->resetInputs();
        session()->flash('message', 'Thanks for subscribing');

    }
    public function render()
    {
        return view('livewire.subscribe');
    }
}
