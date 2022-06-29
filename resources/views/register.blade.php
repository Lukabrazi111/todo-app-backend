<x-layouts.main>
    <x-UI.card>
        <form action="#">
            @csrf
            <h1 class="mb-4 text-2xl text-center underline text-cyan-900">Registration</h1>
            <div class="flex flex-col justify-center">
                <div class="flex items-center justify-center space-x-4">
                    <div class="w-full flex flex-col">
                        <label for="username" class="text-gray-900">Username</label>
                        <input type="text" name="username" id="username"
                               class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none mt-1 rounded">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="email" class="text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                               class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none mt-1 rounded">
                    </div>
                </div>
                <div class="flex flex-col w-full mt-5">
                    <label for="password" class="text-gray-900">Password</label>
                    <input type="password" name="password" id="password"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mb-5 mt-1">
                    <label for="confirm_password" class="text-gray-900">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                           class="border border-gray-400 border-opacity-50 py-2 px-2 focus:shadow focus:outline-none rounded w-full mt-1">
                </div>
                <div class="w-full">
                    <button class="text-center bg-blue-300 w-full mt-4 rounded py-2 hover:bg-blue-400 transition-colors hover:text-white">Register</button>
                </div>
            </div>
        </form>
    </x-UI.card>
</x-layouts.main>

