@extends('layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <a class="btn btn-success" href="{{
  route('menu.create')}}"> Tambah Data Menu</a>
            <p></p>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Ket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Ket</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img width="150px" align="center" src="{{ url('/data_file/'.$menu->gambar) }}"></td>
                        <td>{{ $menu->nama_menu}}</td>
                        <td>Rp.{{number_format ($menu->harga)}}</td>
                        <td>{{ $menu->stok}}</td>
                        <td>{{ $menu->ket}}</td>
                        <td>
                            <form action="{{route('menu.destroy',$menu->id_menu)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning" href="{{ route('menu.edit',$menu->id_menu)}}">Edit</a>
                                <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Ingin Menghapus Data Ini..?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection