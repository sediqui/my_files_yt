<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="flex flex-col bg-gray-200 p-5 gap-3 rounded-xl min-w-2/6">
        <div class="flex flex-col">
            <h1>Login</h1>
            <p>Welcome back to My files cloud.</p>
        </div>
        <form wire:submit="login" class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="email" id="email" name="email"
                    wire:model="email" placeholder="Type here">
            </div>
            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input class="px-4 py-2 border border-gray-500 rounded-xl" type="password" id="password"
                    name="password" wire:model="password" placeholder="Type here">
            </div>
            <button class="bg-amber-300 w-full py-2 rounded-xl cursor-pointer" type="submit">Submit</button>
        </form>
        <div class="flex flex-col text-center">
            <h1>-- OR --</h1>
            <p><span>Don't have an account ?</span> <a href="{{ route('register') }}" class="text-amber-400"
                    wire:navigate>Register</a></p>
        </div>
    </div>
</div>
