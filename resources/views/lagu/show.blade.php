<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <a class="btn btn-primary my-3 py-2" href="{{ route('lagu.index') }}
    ">Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Lagu</h5>
            <p class="card-text"><strong>Judul:</strong> {{ $lagu->judul }}</p>
            <p class="card-text"><strong>Artis:</strong> {{ $lagu->artis }}</p>
            <p class="card-text"><strong>Album:</strong> {{ $lagu->album }}</p>
            <p class="card-text"><strong>Genre:</strong> {{ $lagu->genre }}</p>
            <p class="card-text"><strong>Durasi:</strong> {{ $lagu->durasi }}</p>
        </div>
    </div>
</x-app>
