<ul class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
    <li class="me-2">
        <a href="#"
            class="inline-block px-4 py-3 text-white rounded-lg active bg-gray-800 border border-transparent font-semibold text-xs hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
            aria-current="page">All</a>
    </li>
    @forelse ($categories as $category)
        <li class="me-2">
            <a href="#"
                class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100  ">{{ $category->name }}</a>
        </li>
    @empty
        <button>{{ $slot }}</button>
    @endforelse
</ul>
