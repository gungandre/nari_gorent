<?php

namespace App\Http\Controllers;

use App\Models\unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    public function index()
    {

        $datas = unit::all();
        return view('unit.index', compact('datas'));
    }

    public function create()
    {
        return view('unit.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_unit' => 'required',
            'harga_hari' => 'required',
            'harga_minggu' => 'required',
            'harga_bulan' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-image');
        }

        DB::table('units')->insert([
            'nama_unit' => $validatedData['nama_unit'],
            'harga_hari' => $validatedData['harga_hari'],
            'harga_minggu' => $validatedData['harga_minggu'],
            'harga_bulan' => $validatedData['harga_bulan'],
            'image' => $validatedData['gambar'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/data-unit')->with('success', 'Unit berhasil ditambahkan!');
    }

    public function edit(unit $unit)
    {

        return view('unit.edit', ['data' => $unit]);
    }

    public function update(unit $unit, Request $request)
    {
        $dataLama = unit::find($request->id);
        $validatedData = $request->validate([
            'nama_unit' => 'required',
            'harga_hari' => 'required',
            'harga_minggu' => 'required',
            'harga_bulan' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-image');
            Storage::delete($dataLama->image);
        }

        $unit->update([
            'nama_unit' => $validatedData['nama_unit'],
            'harga_hari' => $validatedData['harga_hari'],
            'harga_minggu' => $validatedData['harga_minggu'],
            'harga_bulan' => $validatedData['harga_bulan'],
            'image' => $validatedData['gambar'],
            'updated_at' => now(),
        ]);

        return redirect('/data-unit')->with('success', 'Unit berhasil diupdate!');
    }

    public function destroy(unit $unit)
    {

        if ($unit->image) {
            Storage::delete($unit->image);
        }

        unit::destroy($unit->id);


        return response()->json([
            'message' => 'Data berhasil dihapus!',
        ]);
    }
}
