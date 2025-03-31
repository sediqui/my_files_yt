<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $validate = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        Auth::attempt($validate);

        session()->regenerate();

        $this->redirectRoute('dashboard', navigate: true);
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
