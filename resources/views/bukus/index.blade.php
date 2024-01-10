
{{-- resources/views/bukus/index.blade.php --}}
<x-app-layout>
<h1>Data Buku</h1>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>TOOLS</th>
                <a href="bukus/create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah </a>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ $buku->bukuID }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ $buku->judul }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ $buku->penulis }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ $buku->penerbit }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ $buku->tahun_terbit }}
                </th>
                <th scope="col" class="px-6 py-3">
                    <a href="bukus/edit" type="submit" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">Edit </a>
                    <form action="{{ route('bukus.destroy', $buku->bukuID) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            Hapus
                        </button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
</table>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>