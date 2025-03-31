<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public $password_confirmation = "";

    public function register()
    {
        // validate
        $validate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // hash password
        $validate['password'] = Hash::make($validate['password']);

        // create new user
        User::create($validate);

        // dd($validate);

        // authenticate user
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            $this->redirectRoute("dashboard", navigate: true);
        } else {
            $this->addError("email", "Invalid email or password");
        }
    }

    #[Layout("components.layouts.guest")]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
