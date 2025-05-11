<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Title('Dashboard'), Layout('components.layouts.guest')] class extends Component {
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
