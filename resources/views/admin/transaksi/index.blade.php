@extends('layout')
@section('content')
<div class="card shadow mb-4">
    <div>
        <form action="/cari" method="GET">
            @csrf
            <div class="form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label> Tanggal Awal </label>
                        <input type="date" name="dari" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label> Tanggal Akhir </label>
                        <input type="date" name="sampai" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label> &nbsp</label><br>
                        <input type="submit" class="btn btn-primary" value="cari Data">
                    </div>
                </div>

        </form>
    </div>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
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
                        <th>Nama Customer</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jumlah Beli</th>
                        <th>Total</th>
                        <th>Konfirmasi Pembayaran</th>
                        <th>Cetak Data</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jumlah Beli</th>
                        <th>Total</th>
                        <th>Konfirmasi Pembayaran</th>
                        <th>Cetak Data</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($transaksi as $transaksis)
                    <tr>
                        <td>{{ ++$i }}</td>

                        <td>{{ $transaksis->user->name}}</td>
                        <td>{{ $transaksis->created_at}}</td>
                        <td><a href="detail-transaksi?id={{$transaksis->id_transaction}}">{{$transaksis->items}} Menu</a></td>
                        <td>Rp. {{ number_format($transaksis->total)}}</td>
                        <td>
                            @if ($transaksis->status == "pending")
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#bayarModal{{$transaksis->id_transaction}}">Bayar</button>
                            <a href="update-status?id={{$transaksis->id_transaction}}&status=batalkan" class="btn btn-outline-danger" href="#">Batalkan</a>
                            @else
                            <h6>{{strtoupper($transaksis->status)}}</h6>
                            @endif
                        </td>
                        <td>

                            <a class="btn btn-success" href="cetak-transaksi?id={{$transaksis->id_transaction}}">Cetak Transaksi</a>
                        </td>
                    </tr>

                    <div class="modal fade" id="bayarModal{{$transaksis->id_transaction}}" tabindex="-1" role="dialog" aria-labelledby="bayarModal{{$transaksis->id_transaction}}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bayarModal{{$transaksis->id_transaction}}Label">Bayar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="customer/assets/images/qr.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="update-status?id={{$transaksis->id_transaction}}&status=berhasil" class="btn btn-primary">Bayar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection