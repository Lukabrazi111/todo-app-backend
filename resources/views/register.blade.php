<x-layout.main>
    <x-UI.card>
        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-4 text-2xl text-center underline text-cyan-900">Registration</h1>
            <div class="flex flex-col justify-center">
                <div class="flex items-center justify-center space-x-4">
                    <div class="w-full flex flex-col relative">
                        <label for="username" class="text-gray-900">Username</label>
                        <input type="text" name="username" id="username"
                               class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none mt-1 rounded">
                        @error('username')
                        <div class="absolute -bottom-5">
                            <small class="text-red-500">{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="w-full flex flex-col relative">
                        <label for="email" class="text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                               class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none mt-1 rounded">
                        @error('email')
                        <div class="absolute -bottom-5">
                            <small class="text-red-500">{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col w-full mt-5">
                    <label for="image" class="text-gray-900">Image</label>
                    <input type="file" name="image" id="image"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mb-5 mt-1">
                    @error('image')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                    <label for="password" class="text-gray-900">Password</label>
                    <input type="password" name="password" id="password"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mb-5 mt-1">
                    @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                    <label for="confirm_password" class="text-gray-900">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mt-1">
                    @error('confirm_password')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full">
                    <x-UI.button>
                        Register
                    </x-UI.button>
                </div>
            </div>
        </form>
    </x-UI.card>
</x-layout.main>

