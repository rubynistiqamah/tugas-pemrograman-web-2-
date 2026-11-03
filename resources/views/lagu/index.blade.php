<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-3 py-2" href="{{ route('lagu.create') }}
    ">Tambah Data Lagu</a>
</x-app>
