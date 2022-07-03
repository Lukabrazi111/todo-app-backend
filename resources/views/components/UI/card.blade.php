<main class="mt-24">
    <x-UI.container>
        <div {{ $attributes->merge(['class' => 'bg-white mx-auto w-full max-w-2xl shadow-2xl py-10 rounded-lg px-10']) }}>
            {{ $slot }}
        </div>
    </x-UI.container>
</main>
