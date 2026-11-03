<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lagu.index',[
            'title' =>'Lagu',
            'lagus' => Lagu::latest()->get()
        ]);
        
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lagu.create',[
            'title' =>'Tambah Data Lagu'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'  => 'required|string',
            'artis'  => 'required|string',
            'album'  => 'required|string',
            'genre'  => 'required|string',
            'durasi' => 'required|integer|min:1',
        ], [
            'judul.required' => 'Judul lagu wajib diisi.',
            'judul.string'   => 'Judul lagu harus berupa teks.',

            'artis.required' => 'Nama artis wajib diisi.',
            'artis.string'   => 'Nama artis harus berupa teks.',

            'album.required' => 'Nama album wajib diisi.',
            'album.string'   => 'Nama album harus berupa teks.',

            'genre.required' => 'Genre wajib diisi.',
            'genre.string'   => 'Genre harus berupa teks.',

            'durasi.required' => 'Durasi lagu wajib diisi.',
            'durasi.integer'  => 'Durasi harus berupa angka bulat (dalam detik).',
            'durasi.min'      => 'Durasi minimal :min detik.',
        ]);

        Lagu::create($validated);

        return to_route('lagu.index')->with('success', 'Data Lagu Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lagu $lagu)
    {
        return view('lagu.show',[
            'title' =>'Detail Lagu',
            'lagu' => $lagu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lagu $lagu)
    {
        return view('lagu.edit',[
            'title' =>'Edit Data Lagu',
            'lagu'=> $lagu            

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lagu $lagu)
    {
          $validated = $request->validate([
            'judul'  => 'required|string',
            'artis'  => 'required|string',
            'album'  => 'required|string',
            'genre'  => 'required|string',
            'durasi' => 'required|integer|min:1',
        ], [
            'judul.required' => 'Judul lagu wajib diisi.',
            'judul.string'   => 'Judul lagu harus berupa teks.',

            'artis.required' => 'Nama artis wajib diisi.',
            'artis.string'   => 'Nama artis harus berupa teks.',

            'album.required' => 'Nama album wajib diisi.',
            'album.string'   => 'Nama album harus berupa teks.',

            'genre.required' => 'Genre wajib diisi.',
            'genre.string'   => 'Genre harus berupa teks.',

            'durasi.required' => 'Durasi lagu wajib diisi.',
            'durasi.integer'  => 'Durasi harus berupa angka bulat (dalam detik).',
            'durasi.min'      => 'Durasi minimal :min detik.',
        ]);

        $lagu->update($validated);

        return to_route('lagu.index')->with('success', 'Data Lagu Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
