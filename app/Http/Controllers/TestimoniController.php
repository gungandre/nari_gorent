<?php

namespace App\Http\Controllers;

use App\Models\unit;
use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {

        $datas = testimoni::all();

        return view('testimoni.index', compact('datas'));
    }

    public function create()
    {
        return view('testimoni.create');
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'keterangan' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-image');
        }

        DB::table('testimonis')->insert([
            'keterangan' => $validatedData['keterangan'],
            'image' => $validatedData['gambar'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/data-testimoni')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function edit(testimoni $testimoni)
    {

        return view('testimoni.edit', ['data' => $testimoni]);
    }

    public function update(testimoni $testimoni, Request $request)
    {
        $dataLama = testimoni::find($request->id);
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-image');
            Storage::delete($dataLama->image);
        }

        $testimoni->update([
            'keterangan' => $validatedData['keterangan'],
            'image' => $validatedData['gambar'],
            'updated_at' => now(),
        ]);

        return redirect('/data-testimoni')->with('success', 'Testimoni berhasil diedit!');
    }

    public function destroy(testimoni $testimoni)
    {


        if ($testimoni->image) {
            Storage::delete($testimoni->image);
        }

        testimoni::destroy($testimoni->id);


        return response()->json([
            'message' => 'Data berhasil dihapus!',
        ]);
    }
}
