<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    #[Layout("components.layouts.guest")]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
