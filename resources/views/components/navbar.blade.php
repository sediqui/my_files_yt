<nav class="p-5 px-20 bg-black/40 text-white">
    <ul class="flex items-center gap-5 justify-between">
        <div class="flex items-center">
            <li><a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a></li>
        </div>
        <div class="flex items-center gap-5">
            <li><a href="{{ route('login') }}" wire:navigate>Login</a></li>
            <li><a href="{{ route('register') }}" wire:navigate>Register</a></li>
        </div>
    </ul>
</nav>
