<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-12">
                <h1 class="text-3xl font-semibold mb-4">Add new post</h1>
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-file-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" required />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" required placeholder="Type the post title here..." />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-textarea-input id="content" class="block mt-1 w-full" name="content" :value="old('content')"
                            required placeholder="Type the post content here..." />
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-4">
                        Add new post
                    </x-primary-button>
                </form>
            </div>
        </div>
</x-app-layout>
