<form action="{{ route('profile.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   placeholder="Enter your username" value="{{ auth()->user()->username }}">
        </div>
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   placeholder="Enter your email" value="{{ auth()->user()->email }}">
        </div>
    </div>
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="image">Avatar</label>
            <input type="file" name="image" id="image"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded">
        </div>
    </div>
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="city">City</label>
            <input type="text" name="city" id="city"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   value="{{ auth()->user()->profile->city }}">
        </div>
    </div>
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="phone">Phone number</label>
            <input type="tel" name="phone" id="phone"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   value="{{ auth()->user()->profile->phone }}">
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   placeholder="Enter your password">
        </div>
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password"
                   class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded"
                   placeholder="Confirm your password">
        </div>
    </div>
    <div>
        <button class="bg-gray-800 hover:bg-gray-900 transition-colors text-white px-4 py-2 rounded-xl mt-6">Save all
        </button>
    </div>
    @if($errors->any())
        <div class="mt-10 flex flex-col space-y-2">
            @error('username')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('email')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('image')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('city')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('phone')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('password')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
            @error('confirm_password')
            <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
    @endif
</form>
