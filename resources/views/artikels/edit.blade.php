<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('artikels.update', $artikel->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul" class="form-label font-semibold">Judul</label>
                            <input type="text" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="judul" value="{{ $artikel->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label font-semibold">Isi</label>
                            <textarea class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="isi" rows="5" required>{{ $artikel->isi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label font-semibold">Penulis</label>
                            <input type="text" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="penulis" value="{{ $artikel->penulis }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_terbit" class="form-label font-semibold">Tanggal Terbit</label>
                            <input type="date" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="tanggal_terbit" value="{{ $artikel->tanggal_terbit }}" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded inline-block">Update</button>
                            <a href="{{ route('artikels.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded inline-block ml-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
