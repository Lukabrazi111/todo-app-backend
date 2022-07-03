<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded" placeholder="Enter your username" value="{{ auth()->user()->username }}">
        </div>
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded" placeholder="Enter your email" value="{{ auth()->user()->email }}">
        </div>
    </div>
    <div class="flex items-center mb-4 space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="image">Avatar</label>
            <input type="file" name="image" id="image" class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded">
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded" placeholder="Enter your password">
        </div>
        <div class="flex flex-col justify-center w-full space-y-1">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="border border-gray-400 border-opacity-20 px-2 py-2 focus:outline-none focus:shadow transition-shadow rounded" placeholder="Confirm your password">
        </div>
    </div>
    <div>
        <button class="bg-gray-800 hover:bg-gray-900 transition-colors text-white px-4 py-2 rounded-xl mt-6">Save all</button>
    </div>
</form>
