<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Tanggal Transaksi</th>
                <th>Jumlah Beli</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody align="center">
            <tr>
                <td>{{$transaksi->user->name}}</td>
                <td>{{$transaksi->created_at}}</td>
                <td>{{count($items)}}</td>
                <td>{{$transaksi->total}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" border="1">
        <thead>
            <tr>

                <th>Gambar</th>
                <th>Nama Menu</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach($items as $item)
            <tr>


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
</body>

</html>
<script>
    window.print()
</script>