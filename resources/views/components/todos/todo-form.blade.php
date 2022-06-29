<form action="#" class="flex items-center">
    @csrf
    <input type="text" name="todo" placeholder="Add your new todo"
           class="border border-gray-400 border-opacity-20 px-3 py-2 w-full focus:outline-none focus:shadow transition-shadow rounded mr-2">
    <button class="bg-cyan-400 px-3 py-2 rounded-md text-white hover:bg-cyan-500 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
        </svg>
    </button>
</form>
