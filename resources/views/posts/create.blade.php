<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label font-semibold">Title</label>
                            <input type="text" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label font-semibold">Content</label>
                            <textarea class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="content" rows="5" required></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded inline-block">Submit</button>
                            <a href="{{ route('posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded inline-block ml-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
