<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $users = $this->user;
        // dd($users->name);
    }
    #[Title("Profile")]
    public function render()
    {
        return view('livewire.profile');
    }
}
