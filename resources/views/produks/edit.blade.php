<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('produks.update', $produk->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label font-semibold">Nama Produk</label>
                            <input type="text" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="nama_produk" value="{{ $produk->nama_produk }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label font-semibold">Deskripsi</label>
                            <textarea class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="deskripsi" rows="5" required>{{ $produk->deskripsi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label font-semibold">Harga</label>
                            <input type="number" step="0.01" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="harga" value="{{ $produk->harga }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label font-semibold">Stok</label>
                            <input type="number" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" name="stok" value="{{ $produk->stok }}" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded inline-block">Update</button>
                            <a href="{{ route('produks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded inline-block ml-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
