<x-layouts.main>
    <x-UI.card>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <h1 class="mb-4 text-2xl text-center underline text-cyan-900">Login</h1>
            <div class="flex flex-col justify-center">
                <div class="flex flex-col w-full mt-5">
                    <input type="text" name="username" id="username" placeholder="Enter your username or email"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mb-5 mt-1">
                    @error('username')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mt-1">
                    @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full">
                    <x-UI.button>
                        Login
                    </x-UI.button>
                </div>
                @if(session()->has('error'))
                    <div class="mt-5 text-center">
                        <span class="text-red-500">{{ session('error') }}</span>
                    </div>
                @endif
            </div>
        </form>
    </x-UI.card>
</x-layouts.main>

