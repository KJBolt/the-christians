<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Messages;

class MessageForm extends Component
{
    public $firstName;
    public $lastName;
    public $emailAddress;
    public $message;

    public function resetInputs(){
        $this->firstName = "";
        $this->lastName = "";
        $this->emailAddress = "";
        $this->message = "";
    }

    protected $rules= [
        'firstName' => 'required',
        'lastName' => 'required',
        'emailAddress' => 'required|email|unique:messages',
        'message' => 'required'
    ];

    public function register (){
        $data = $this->validate();
        // Messages::create($data);
        $message = new Messages();
        $message->firstName = $this->firstName;
        $message->lastName = $this->lastName;
        $message->emailAddress = $this->emailAddress;
        $message->message = $this->message;
        $message->save();
        $this->resetInputs();
        session()->flash('message', 'Message sent successfully.');
    }

    public function render()
    {
        return view('livewire.message-form');
    }
}
