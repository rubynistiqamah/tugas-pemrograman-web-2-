<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-3 py-2" href="{{ route('lagu.index') }}
    ">Kembali</a>

    <form action="{{ route('lagu.store') }}" method="POST" novalidate>
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                value="{{ old('judul') }}" placeholder="Masukkan judul lagu">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Artis --}}
        <div class="mb-3">
            <label for="artis" class="form-label">Artis</label>
            <input type="text" class="form-control @error('artis') is-invalid @enderror" id="artis"
                name="artis" value="{{ old('artis') }}" placeholder="Masukkan nama artis">
            @error('artis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control @error('album') is-invalid @enderror" id="album"
                name="album" value="{{ old('album') }}" placeholder="Masukkan nama album">
            @error('album')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                name="genre" value="{{ old('genre') }}" placeholder="Contoh: Pop, Rock, Jazz">
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <div class="input-group has-validation">
                <input type="number" class="form-control @error('durasi') is-invalid @enderror" id="durasi"
                    name="durasi" value="{{ old('durasi') }}" min="1" placeholder="Masukkan durasi">
                <span class="input-group-text">detik</span>
                @error('durasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
        </div>
    </form>
</x-app>
