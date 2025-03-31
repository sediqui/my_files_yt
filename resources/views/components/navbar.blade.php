<nav class="p-5 px-20 bg-black/40 text-white">
    <ul class="flex items-center gap-5 justify-between">
        <div class="flex items-center gap-5">
            @guest
                <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
            @endguest
            @auth()
                <li><a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a></li>
            @endauth
        </div>
        <div class="flex items-center gap-5">
            @guest
                <li><a href="{{ route('login') }}" wire:navigate>Login</a></li>
                <li><a href="{{ route('register') }}" wire:navigate>Register</a></li>
            @endguest
            @auth()
                <li><a href="{{ route('profile') }}" wire:navigate>Profile</a></li>
                <li>
                    <livewire:logout />
                </li>
            @endauth
        </div>
    </ul>
</nav>
