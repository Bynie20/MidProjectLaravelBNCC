<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class KaryawanController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $karyawans = Karyawan::latest()->paginate(5);
        return view('karyawans.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawans.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required|string|min:5|max:20',
            'umur'     => 'required|numeric|gt:20',
            'alamat'   => 'required|string|min:10|max:40',
            'telepon'  => 'required|string|min:9|max:12|regex:/^08/'
        ]);

        Karyawan::create([
            'nama'     => $request->nama,
            'umur'     => $request->umur,
            'alamat'   => $request->alamat,
            'telepon'  => $request->telepon,
        ]);

        return redirect()->route('karyawans.index');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $this->validate($request, [
            'nama'     => 'required|string|min:5|max:20',
            'umur'     => 'required|numeric|gt:20',
            'alamat'   => 'required|string|min:10|max:40',
            'telepon'  => 'required|string|min:9|max:12|regex:/^08/'
        ]);

        $karyawan->update([
            'nama'     => $request->nama,
            'umur'     => $request->umur,
            'alamat'   => $request->alamat,
            'telepon'  => $request->telepon,
        ]);

        return redirect()->route('karyawans.index');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawans.index');
    }
}
