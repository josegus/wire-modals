<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateUser extends ModalComponent
{
    public $state = [
        'username' => '',
        'email' => '',
    ];

    public function render()
    {
        return view('livewire.create-user')->layout('components.layouts.app');
    }

    public function doSomething()
    {
        info('test');
        //$this->resetErrorBag();

        $this->validate([
            'state.username' => 'required|min:3',
            'state.email' => 'required|email',
        ]);

        $this->state = [
            'username' => '',
            'email' => '',
        ];
    }
}
