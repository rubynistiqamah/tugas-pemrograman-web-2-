<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lagu.index',[
            'title' =>'Lagu'
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('lagu.show',[
            'title' =>'Detail Lagu'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lagu.edit',[
            'title' =>'Edit Data Lagu'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
