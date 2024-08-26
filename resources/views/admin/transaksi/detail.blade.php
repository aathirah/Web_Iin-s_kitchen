@extends('layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img width="150px" align="center" src="{{ url('/data_file/'.$item->gambar) }}"></td>

                        <td>{{ $item->nama_menu}}</td>
                        <td>{{ $item->ket}}</td>
                        <td>Rp.{{ number_format($item->harga)}}</td>
                        <td>{{$item->qty}}</td>
                        <td>Rp.{{ number_format($item->total)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection