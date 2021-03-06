<x-layout.main>
    <x-UI.card>
        <div class="mb-5">
            <h1 class="text-gray-800 font-semibold text-3xl">Todo App</h1>
        </div>
        <x-todo.todo-form/>

        <div class="mt-5">
            <ul>
                <x-todo.todo-items/>
            </ul>
        </div>
    </x-UI.card>
</x-layout.main>
