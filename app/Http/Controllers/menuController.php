<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::latest()->paginate(20);
        return view('admin/menu.index', compact('menus'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/menu.create');
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
                'nama_menu' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'ket' => 'required',
                'gambar' => 'required',
            ]);

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);

            Menu::create([
                'nama_menu' => $request->nama_menu,
                'harga' =>  $request->harga,
                'stok' =>  $request->stok,
                'ket' =>  $request->ket,
                'gambar' =>  $nama_file,
            ]);
            return redirect()->route('menu.index')
                ->with('success', 'Data Menu Berhasil di Simpan');
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
    public function edit(Menu $menu)
    {
        return view('admin/menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'ket' => 'required',

        ]);

        if ($request->hasFile('gambar')) {

            $filePath = public_path('data_file/' . $menu->gambar);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);

            $menu->update([
                'nama_menu' => $request->nama_menu,
                'harga' =>  $request->harga,
                'stok' =>  $request->stok,
                'ket' =>  $request->ket,
                'gambar' =>  $nama_file,
            ]);
        } else {
            $menu->update($request->all());
        }
        return redirect()->route('menu.index')
            ->with('success', 'Data Menu Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')
            ->with('success', 'Data Berhasil di Hapus');
    }
}
