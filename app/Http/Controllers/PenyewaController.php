<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa; // Import model Penyewa

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all(); // Mengambil semua data penyewa
        return view('penyewa.index', compact('penyewas')); // Menampilkan data di view 'penyewa.index'
    }

    public function create()
    {
        // Menampilkan form untuk membuat penyewa baru
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'no' => 'required',
            'nama_penyewa' => 'required',
            'email' => 'nullable|email',
            'no_identitas' => 'required',
            'no_telepon' => 'required',
        ]);
        Penyewa::create([
            'no' => $request->no,
            'nama_penyewa' => $request->nama_penyewa,
            'email' => $request->email,
            'no_identitas' => $request->no_identitas,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect()->route('penyewa')->with(['succes' => 'Data Berhasil Ditambahkan!']);
    }

    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id); // Cari penyewa berdasarkan ID

        return view('penyewa.edit', compact('penyewa')); // Tampilkan form untuk mengedit penyewa
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no' => 'required',
            'nama_penyewa' => 'required',
            'email' => 'nullable|email',
            'no_identitas' => 'required',
            'no_telepon' => 'required',
        ]);

        Penyewa::whereId($id)->update($validatedData); // Update data penyewa

        return redirect()->route('penyewa.index')
            ->with('success', 'Penyewa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $penyewa = Penyewa::findOrFail($id); // Cari penyewa berdasarkan ID
        $penyewa->delete(); // Hapus penyewa

        return redirect()->route('penyewa.index')
            ->with('success', 'Penyewa berhasil dihapus');
    }
}

