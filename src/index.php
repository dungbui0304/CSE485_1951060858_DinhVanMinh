<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <title>Travel Web</title>
</head>

<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">
                        <img src="assest/img/logo.jpg" height="60px" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item text-white">
                                <a class="nav-link text-white active" aria-current="page" href="index.php">
                                    <i class="fas fa-home"></i>
                                    TRANG CHỦ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="infoTour.php">
                                    <i class="fas fa-plane-arrival"></i>TOUR</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-white" href="#">COMBO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">KHÁCH SẠN</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="login.php"><i class="fas fa-user"></i>ĐĂNG NHẬP</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </div>
    <!-- slider -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>TRAVEL</h1>
                        <input type="text" placeholder="Bạn muốn đi đâu?">
                        <button type="button" class="">Tìm kiếm</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>TRAVEL</h1>
                        <input type="text" placeholder="Bạn muốn đi đâu?">
                        <button type="button" class="">Tìm kiếm</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>TRAVEL</h1>
                        <input type="text" placeholder="Bạn muốn đi đâu?">
                        <button type="button" class="">Tìm kiếm</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Locations -->
    <div class="container">
        <div class="col-md-12  hp-title">
            <h3 class="title-inline page_speed_1758259825">
                <a href="#" class="style-link-home">
                    <span class="name-tour">Tour hot </span>
                </a>

            </h3>
            <div class="rulers"></div>
        </div>
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="img-item1">
                    <a href="infoTour.php" class="img-link">
                        <img src="./assest/img/tour1.jpg" alt="" class="img">
                    </a>
                </div>
                <div class="descriptions">
                    <p class="tittle">Hà Nội - Hòa Bình BaKhan Resort 4 sao 2 ngày 1 đêm</p>
                    <div class="row">
                        <div class="col-md-5">
                            <p class=""> <i class="fas fa-calendar"></i>Đang cập nhật</p>
                            <p><i class="fas fa-clock"></i>2 ngày 1 đêm</p>
                        </div>
                        <div class="col-md-7">
                            <div class="without-price"></div>
                            <div class="price font-price">
                                690.000đ/khách
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="img-item1">
                    <a href="" class="img-link">
                        <img src="https://f42-zpg.zdn.vn/4911571839052933337/a4f4df64f7093f576618.jpg" alt="" class="img">
                    </a>
                </div>
                <div class="descriptions">
                    <p class="tittle">Hà Nội - Hòa Bình BaKhan Resort 4 sao 2 ngày 1 đêm</p>
                    <div class="row">
                        <div class="col-md-5">
                            <p class=""><i class="fas fa-calendar"></i>Đang cập nhật</p>
                            <p><i class="fas fa-clock"></i>2 ngày 1 đêm</p>
                        </div>
                        <div class="col-md-7">
                            <div class="without-price"></div>
                            <div class="price font-price">
                                690.000đ/khách
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="img-item1">
                    <a href="" class="img-link">
                        <img src="./assest/img/tour3.jpg" alt="" class="img">
                    </a>
                </div>
                <div class="descriptions">
                    <p class="tittle">Hà Nội - Hòa Bình BaKhan Resort 4 sao 2 ngày 1 đêm</p>
                    <div class="row">
                        <div class="col-md-5">
                            <p class=""><i class="fas fa-calendar"></i>Đang cập nhật</p>
                            <p><i class="fas fa-clock"></i>2 ngày 1 đêm</p>
                        </div>
                        <div class="col-md-7">
                            <div class="without-price"></div>
                            <div class="price font-price">
                                690.000đ/khách
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <hr class="my-4"> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>

        <section class="footer">
            <div class="container text-center">
                <p>All rights reserved. Designed By <a href="#">CSE485</a></p>
            </div>
        </section>
</body>

</html>