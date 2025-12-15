<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-6">{{ __("You're logged in!") }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <!-- Card Posts -->
                        <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                            <svg class="w-16 h-16 mx-auto mb-3 text-blue-800" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"></path>
                                <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"></path>
                            </svg>
                            <h4 class="text-xl font-bold mb-3 text-blue-800">Posts Management</h4>
                            <p class="text-gray-700 mb-4 text-sm">Manage your blog posts here</p>
                            <a href="{{ route('posts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                                Go to Posts
                            </a>
                        </div>
                        
                        <!-- Card Artikels -->
                        <div class="bg-green-100 p-6 rounded-lg shadow-md text-center">
                            <svg class="w-16 h-16 mx-auto mb-3 text-green-800" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            <h4 class="text-xl font-bold mb-3 text-green-800">Artikels Management</h4>
                            <p class="text-gray-700 mb-4 text-sm">Manage your articles here</p>
                            <a href="{{ route('artikels.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">
                                Go to Artikels
                            </a>
                        </div>
                        
                        <!-- Card Produks -->
                        <div class="bg-yellow-100 p-6 rounded-lg shadow-md text-center">
                            <svg class="w-16 h-16 mx-auto mb-3 text-yellow-800" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                            </svg>
                            <h4 class="text-xl font-bold mb-3 text-yellow-800">Produks Management</h4>
                            <p class="text-gray-700 mb-4 text-sm">Manage your products here</p>
                            <a href="{{ route('produks.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block">
                                Go to Produks
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
