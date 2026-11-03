<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    @if (session('success'))
        <div class="alert alert-success" role="alert">

            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary my-3 py-2" href="{{ route('lagu.create') }}
    ">Tambah Data Lagu</a>

    <table class="table  table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Artis</th>
                <th>Album</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($lagus as $lagu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $lagu->judul }}</td>
                    <td>{{ $lagu->artis }}</td>
                    <td>{{ $lagu->album }}</td>
                    <td>{{ $lagu->genre }}</td>
                    <td>{{ $lagu->durasi }} Detik</td>
                    <td>
                        <a class="btn btn-info btn-warning" href="{{ route('lagu.edit', $lagu->id) }}  ">Edit</a>
                        <a class="btn btn-info btn-sm" href="{{ route('lagu.show', $lagu->id) }}  ">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
