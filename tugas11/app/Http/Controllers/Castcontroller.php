<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', ["cast" => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = new Cast;

        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;

        $cast->save();

        return redirect('/cast');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = Cast::find($id);
        
        $cast->nama = $request['nama'];
        $cast->umur = $request['umur'];
        $cast->bio = $request['bio'];

        $cast->save();

        return redirect('/cast');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }
}