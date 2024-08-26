<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->paginate(20);
        return view('admin/pelanggan.index', compact('pelanggans'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $request->validate([
                'nm_pelanggan' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'gambar' => 'required',
            ]);

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);

            pelanggan::create([
                'nm_pelanggan' => $request->nm_pelanggan,
                'alamat'       => $request->alamat,
                'no_hp'        => $request->no_hp,
                'gambar'       => $nama_file,
            ]);
            return redirect()->route('pelanggan.index')
                ->with('success', 'Data Pelanggan Berhasil di Simpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('admin/pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nm_pelanggan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',

        ]);

        if ($request->hasFile('gambar')) {

            $filePath = public_path('data_file/' . $pelanggan->gambar);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);

            $pelanggan->update([
                'nm_pelanggan' => $request->nm_pelanggan,
                'alamat' =>  $request->alamat,
                'no_hp' =>  $request->no_hp,
                'gambar' =>  $nama_file,
            ]);
        } else {
            $pelanggan->update($request->all());
        }
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Pelanggan Berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Berhasil di Simpan');
    }
}
