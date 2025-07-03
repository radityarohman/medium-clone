<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul
                        class="flex flex-wrap justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100  ">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-4 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mb-4">
                @forelse ($posts as $post)
                    <x-post-item :post=$post />
                @empty
                    <p class="text-gray-400">No available post for now...</p>
                @endforelse
            </div>
            {{ $posts->links('') }}
        </div>
</x-app-layout>
