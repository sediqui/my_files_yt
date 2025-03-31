<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.guest')] #[Title('Dashboard')] class extends Component {
    public $name = 'dashboard';
};

?>

<div>
    <div>
        <h1>Welcome to Livewire! Dashboard</h1>
        <p>
            {{ 'hello' }}
            {{ $name }}
        </p>
    </div>
</div>
</div>
