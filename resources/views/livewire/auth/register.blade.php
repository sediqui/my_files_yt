<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="flex flex-col bg-gray-200 p-5 gap-3 rounded-xl min-w-2/6">
        <div class="flex flex-col">
            <h1>Login</h1>
            <p>Welcome back to My files cloud.</p>
        </div>
        <form wire:submit="register" class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="name" id="name" name="name"
                    wire:model.live="name" placeholder="Type here">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="email" id="email" name="email"
                    wire:model.live="email" placeholder="Type here">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="password" id="password"
                    name="password" wire:model.live="password" placeholder="Type here">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="password_confirmation">Password_Confirmation</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="password" id="password_confirmation"
                    name="password_confirmation" wire:model.live="password_confirmation" placeholder="Type here">
            </div>
            <button class="bg-amber-300 w-full py-2 rounded-xl cursor-pointer" type="submit">Submit</button>
        </form>
        <div class="flex flex-col text-center">
            <h1>-- OR --</h1>
            <p><span>Already have account : </span> <a href="{{ route('login') }}" class="text-amber-400"
                    wire:navigate>Login</a>
            </p>
        </div>
        <div class="flex flex-col">
            <p>Name : {{ $name }}</p>
            <p>Email : {{ $email }}</p>
            <p>Password : {{ $password }}</p>
            <p>Password_Confirmation : {{ $password_confirmation }}</p>
        </div>
    </div>
</div>
