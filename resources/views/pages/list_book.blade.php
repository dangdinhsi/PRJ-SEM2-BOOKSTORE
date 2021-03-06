<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{('front-end/css/product-item.css')}}">
    <script type="text/javascript" src="{{('front-end/js/main.js')}}"></script>
    <link rel="stylesheet" href="{{('front-end/fontawesome_free_5.13.0/css/all.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{('front-end/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{('front-end/slick/slick-theme.css')}}" />
    <script type="text/javascript" src="{{('front-end/slick/slick.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{('front-end/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{('front-end/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{('front-end/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="{{('front-end/favicon_io/site.webmanifest')}}">    
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="{{ route('home') }}" style="color: #CF111A;"><b>SIXSTORE</b>.NET</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form t??m ki???m  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nh???p s??ch c???n t??m ki???m...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ?? ????ng nh???p ????ng k?? gi??? h??ng tr??n header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">T??i
                                kho???n</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">????ng k??</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">????ng nh???p</a>
                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="{{ route ('shop-cart')}}" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="{{ route ('shop-cart')}}"
                            style="display:inline-block">Gi???
                            H??ng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signup" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nh???p h??? v?? t??n" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nh???p s??? ??i???n tho???i" name="phone"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Nh???p m???t kh???u" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Nh???p l???i m???t kh???u" required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">????ng k??</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i SIXSTORE v???</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">??i???u kho???n d???ch
                                v??? & Ch??nh s??ch b???o m???t</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signin" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="email"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="M???t kh???u" name="password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nh??? m???t kh???u</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Qu??n m???t
                                kh???u</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">????ng nh???p</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fab fa-google mr-2"></i> ????ng nh???p b???ng Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                class="fab fa-facebook-f mr-2"></i> ????ng nh???p b???ng Facebook</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- thanh "danh muc sach" ???? ???????c ???n b??n trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh m???c s??ch</span>
                        </div>
                        <!-- CATEGORIES -->
                        <div class="categorycontent">
                            <ul>
                                <li> <a href="#"> S??ch Kinh T??? - K??? N??ng</a>
                                </li>

                                <li><a href="">Ngh??? Thu???t S???ng - T??m L?? </a>
                                </li>
                                <li><a href="#">S??ch V??n H???c Vi???t Nam</a>
                                </li>
                                <li><a href="#">S??ch V??n H???c N?????c Ngo??i</a>
                                </li>
                                <li><a href="#">S??ch Thi???u Nhi</a>
                                </li>
                                <li><a href="#">S??ch Gi??o D???c - Gia ????nh</a>
                                </li>
                                <li><a href="#">S??ch L???ch S???</a>
                                </li>
                                <li><a href="#">S??ch V??n H??a - Ngh??? Thu???t</a>
                                </li>
                                <li><a href="#">S??ch Khoa H???c - Tri???t H???c</a>
                                </li>
                                <li><a href="#">S??ch T??m Linh - T??n Gi??o</a>
                                </li>
                                <li><a href="#">S??ch Y H???c - Th???c D?????ng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b> 0367 769 993</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">H??? tr??? tr???c tuy???n </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang ch???</a></li>
                <li class="breadcrumb-item active"><a href="sach-kinh-te.html">S??ch kinh t??? - k??? n??ng</a></li>
            </ol>
        </div>
    </section>

    <!-- ???nh banner  -->
    <section class="banner">
        <div class="container">
            <a href="sach-moi-tuyen-chon.html"><img src="{{('front-end/images/banner-sach-ktkn.jpg')}}" alt="banner-sach-ktkn"
                    class="img-fluid"></a>
        </div>
    </section>

    <!-- th??? lo???i s??ch: kinh t??? ch??nh tr??? nh??n v???t b??i h???c kinh doanh ( t???ng ?? vu??ng) -->
    <section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">s??ch kinh t??? - k??? n??ng</h1>
            </div>
            <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-kinh-te-chinh-tri.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Kinh t??? - ch??nh tr???
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-nhan-vat-bai-hoc-kinh-doanh.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Nh??n v???t - B??i h???c kinh doanh
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-khoi-nghiep.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch Kh???i Nghi???p
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-quan-tri-lanh-dao.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch Qu???n tr??? - L??nh ?????o
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-tai-chinh-ke-toan.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch t??i ch??nh - k??? to??n
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-kinh-te-hoc.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch Kinh t??? h???c
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-quan-tri-nhan-su.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch qu???n tr??? nh??n s???
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-chung-khoan-bat-dong-san-dau-tu.png')}}"
                                    alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch ch???ng kho??n - b???t ?????ng s???n
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-ky-nang-lam-viec.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch k??? n??ng l??m vi???c
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="{{('front-end/images/tls-sach-marketing-ban-hang.png')}}" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                S??ch marketing - b??n h??ng
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- kh???i s???n ph???m  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header c???a kh???i s???n ph???m : tag(t??c gi???), b??? l???c v?? s???p x???p  -->
                <div class="header-khoi-sp d-flex">
                    <div class="tag">
                        <label>T??c gi??? n???i b???t:</label>
                        <a href="#">T???t c???</a>
                        <a href="#" data-tacgia=".MarieForleo">Marie Forleo</a>
                        <a href="#" data-tacgia=".DeanGraziosi">Dean Graziosi</a>
                        <a href="#" data-tacgia=".SimonSinek">Simon Sinek</a>
                    </div>
                    <div class="sort d-flex ml-auto">
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">S???p x???p</label>
                            <select class="sapxep-select">
                                <option value="moinhat">M???i nh???t</option>
                                <option value="thap-cao">Gi??: Th???p - Cao</option>
                                <option value="cao-thap">Gi??: Cao - Th???p</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- c??c s???n ph???m  -->
                <div class="items">
                    <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card ">
                                    <a href="{{route('detail-book')}}" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item MarieForleo">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item MarieForleo">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DavikClark">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item TSL??Th???mD????ng">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item SimonSinek">
                                <div class="card ">
                                    <a href="#" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="L???p K??? Ho???ch Kinh Doanh Hi???u Qu???">
                                        <img class="card-img-top anh" src="{{('front-end/images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg')}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">L???p K??? Ho???ch Kinh Doanh Hi???u Qu???</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ???</div>
                                                <div class="giacu text-muted">139.000 ???</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- pagination bar -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <!-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li> -->
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&rsaquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->

    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{('front-end/images/icon-books.png')}}" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">H??N 14.000 T???A S??CH HAY</h6>
                            <p class="detail">Tuy???n ch???n b???i SIXSTORE</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{('front-end/images/icon-ship.png')}}" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MI???N PH?? GIAO H??NG</h6>
                            <p class="detail">T??? 150.000?? ??? HN</p>
                            <p class="detail">T??? 300.000?? ??? t???nh th??nh kh??c</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{('front-end/images/icon-gift.png')}}" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QU?? T???NG MI???N PH??</h6>
                            <p class="detail">T???ng Bookmark</p>
                            <p class="detail">Bao s??ch mi???n ph??</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="{{('front-end/images/icon-return.png')}}" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">?????I TR??? NHANH CH??NG</h6>
                            <p class="detail">H??ng b??? l???i ???????c ?????i tr??? nhanh ch??ng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">V??? SIXSTORE</h6>
                        <a href="#">Gi???i thi???u v??? SIXSTORE</a>
                        <a href="#">Tuy???n d???ng</a>
                        <div class="fb-like" data-href="#"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">H??? TR??? KH??CH H??NG</h6>
                        <a href="#">H?????ng d???n ?????t h??ng</a>
                        <a href="#">Ph????ng th???c thanh to??n</a>
                        <a href="#">Ph????ng th???c v???n chuy???n</a>
                        <a href="#">Ch??nh s??ch ?????i tr???</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">H???P T??C V?? LI??N K???T</h6>
                        <img src="{{('front-end/images/dang-ky-bo-cong-thuong.png')}}" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Ph????ng th???c thanh to??n</h6>
                        <img src="{{('front-end/images/visa-payment.jpg')}}" alt="visa-payment">
                        <img src="{{('front-end/images/master-card-payment.jpg')}}" alt="master-card-payment">
                        <img src="{{('front-end/images/jcb-payment.jpg')}}" alt="jcb-payment">
                        <img src="{{('front-end/images/atm-payment.jpg')}}" alt="atm-payment">
                        <img src="{{('front-end/images/cod-payment.jpg')}}" alt="cod-payment">
                        <img src="{{('front-end/images/payoo-payment.jpg')}}" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>


</body>

</html>