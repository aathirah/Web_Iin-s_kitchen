<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Iin's Kitchen</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="customer/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="customer/assets/css/font-awesome.css">

    <link rel="stylesheet" href="customer/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="customer/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="customer/assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="customer/assets/images/iin's_kitchen.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#offers">Menu</a></li>


                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            @if ($user = auth()->user())
                            @if ($user->role == "customer")
                            <li class="scroll-to-section">
                                <a href="#" data-toggle="modal" data-target="#cartDialog">Order</a>
                            </li>
                            @endif
                            @endif
                            <li class="scroll-to-section">
                                @if (!auth()->user())
                                <button type="button" class="btn" data-toggle="modal" data-target="#loginDialog"><b>Log In</b></button>
                                @else
                                <button type="button" class="btn text-danger" data-toggle="modal" data-target="#logoutDialog"><b>Log Out</b></button>
                                @endif
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Iin's kitchen</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="customer/assets/images/warung1 (1).jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="customer/assets/images/warung2.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="customer/assets/images/warung3.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>Iin's Kitchen</h2>
                        </div>
                        <p>Iin’s Kitchen sendiri merupakan UMKM yang bergerak dibidang penjualan makanan berat hingga makanan ringan mulai dari nasi campur, lauk pauk, sayur masak dan gorengan dengan harga yang terjangkau.Iin’s Kitchen berlokasi di Jl.Patra Raya Klayan,Jadimulya,
                            Kec.GunungJati ,Kabupaten Cirebon.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="customer/assets/images/nasi_ayam.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="customer/assets/images/sopayam.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="customer/assets/images/ikan.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="img">
                            <img src="customer/assets/images/kitchen.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->





    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Iin's Kitchen</h6>
                        <h2>Penawaran Hari Ini</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="-">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img src="customer/assets/images/tab-icon-01.png" alt="">Paket Nasi Campur</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach($menu as $menu)
                                <div class="card mt-5" style="width: 18rem;">
                                    <img class="card-img-top" src="data_file/{{$menu->gambar}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4>{{$menu->nama_menu}}</h4>
                                        <p>{{$menu->ket}}</p>
                                        <h6>Rp.{{number_format ($menu->harga)}}</h6>
                                        @if (auth()->user())
                                        @if (auth()->user()->role == "customer")
                                        <button class="btn btn-outline-success btn-block mt-4" type="button" data-toggle="modal" data-target="#keranjangModal{{$menu->id_menu}}">Tambah ke keranjang</button>
                                        @endif
                                        @endif
                                    </div>
                                </div>

                                <div class="modal fade" id="keranjangModal{{$menu->id_menu}}" tabindex="-1" role="dialog" aria-labelledby="keranjangModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="keranjangModalLabel">Tambahkan ke keranjang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('cart.store')}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Kuantitas</label>
                                                        <input type="hidden" class="form-control" name="id_menu" value="{{$menu->id_menu}}">
                                                        <input type="number" class="form-control" min="1" value="1" name="qty">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Tambahkan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </article>
    </section>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Kontak Kami</h6>
                            <h2>Hubungi Kontak Di Bawah Ini</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">Iin's Kitchen@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="customer/assets/images/iin's_kitchen_white.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright 2024


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @if (auth()->user())
    <div class="modal fade" id="cartDialog" tabindex="-1" role="dialog" aria-labelledby="cartDialogLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartDialogLabel">KERANJANG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="order-transaction" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            @if (count($cart) == 0)
                            <h6 class="px-4">KERANJANG MASIH KOSONG</h6>
                            @endif
                            @foreach ($cart as $row)
                            <div class="col-2 py-2">
                                <img class="rounded" style="height: 4em;width: 4em;" src="data_file/{{$row->menu->gambar}}">
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>{{$row->menu->nama_menu}}</h6>
                                    </div>
                                    <div class="col-12">
                                        Rp.{{number_format($row->total)}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row justify-content-center align-items-center">
                                    <a class="btn" href="{{'decrease-quantity/'.$row->id_cart}}">-</a>
                                    <div class="px-2">{{$row->qty}}</div>
                                    <a class="btn" href="{{'increase-quantity/'.$row->id_cart}}">+</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        @if (count($cart) > 0)
                        <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

    <div class="modal fade" id="loginDialog" tabindex="-1" role="dialog" aria-labelledby="loginDialogLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="button" class="btn" onclick="onCloseDialog()" data-toggle="modal" data-target="#registerModal">Register Now</button>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutDialog" tabindex="-1" role="dialog" aria-labelledby="logoutDialogLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutDialogLabel">Log Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="logout" method="get">
                    @csrf
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin keluar?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger">Iya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="register" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function onCloseDialog() {
            $('#loginDialog').modal('hide');
        }
    </script>

    <!-- jQuery -->
    <script src="customer/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="customer/assets/js/popper.js"></script>
    <script src="customer/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="customer/assets/js/owl-carousel.js"></script>
    <script src="customer/assets/js/accordions.js"></script>
    <script src="customer/assets/js/datepicker.js"></script>
    <script src="customer/assets/js/scrollreveal.min.js"></script>
    <script src="customer/assets/js/waypoints.min.js"></script>
    <script src="customer/assets/js/jquery.counterup.min.js"></script>
    <script src="customer/assets/js/imgfix.min.js"></script>
    <script src="customer/assets/js/slick.js"></script>
    <script src="customer/assets/js/lightbox.js"></script>
    <script src="customer/assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="customer/assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>