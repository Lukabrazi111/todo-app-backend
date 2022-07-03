<x-layout.main>
    <x-UI.container>
        <div class="flex space-x-4">
            <x-UI.card class="w-screen">
                <div class="mb-4">
                    <h1 class="font-semibold text-2xl text-gray-800">General information about <span
                            class="font-semibold text-blue-500 underline">{{ auth()->user()->username }}</span></h1>
                </div>
                <div class="text-gray-600">
                    <x-profile.profile-form/>
                </div>
            </x-UI.card>
            <x-UI.card class="max-w-sm w-full px-0 py-0">
                <div class="pb-12">
                    <div class="relative mb-10">
                        <img src="{{ asset('avatars/background-image.jpg') }}" alt="default-avatar"
                             class="object-cover w-full rounded-t-lg">
                        <div class="z-20 -mt-20 flex items-center justify-center rounded-full">
                            <img src="{{ auth()->user()->isImageExists() }}" alt="user-image"
                                 class="w-40 h-40 object-cover border border-white bg-gray-200 shadow-2xl rounded-full">
                        </div>
                    </div>
                    <div class="text-center text-gray-800">
                        <div class="flex flex-col items-center space-y-2">
                            <span class="text-2xl">{{ auth()->user()->username }}</span>
                            <span>{{ auth()->user()->email }}</span>
                            <span class="text-sm">New York, USA</span>
                        </div>
                    </div>
                </div>
            </x-UI.card>
        </div>
    </x-UI.container>
</x-layout.main>
