<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- I8llustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" align="center">TAMBAH DATA MENU</h6>
            </div>
            <div class="card-body">

                <form class="user" method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                    {{ @csrf_field() }}

                    <div class="form-group">
                        <Label>Nama Menu :</Label>
                        <input type="text" class="form-control" name="nama_menu" placeholder="Masukan Nama Menu..">
                    </div>


                    <div class="form-group">
                        <Label>Harga :</Label>
                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga..">
                    </div>

                    <div class="form-group">
                        <Label>Stok :</Label>
                        <select name="stok" id="stok" class="form-control">
                            <option hidden>Pilih Stok</option>
                            <option value="available">Tersedia</option>
                            <option value="unavailable">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <Label>Ket:</Label>
                        <input type="text" class="form-control" name="ket" placeholder="Masukan Ket..">
                    </div>

                    <div class="form-group">
                        <Label>Foto:</Label>
                        <input type="file" class="form-control" name="gambar">
                    </div>



                    <center><input type="submit" class="btn btn-primary" value="Simpan Data" /></center>


                </form>

            </div>
        </div>
    </div>
</div>