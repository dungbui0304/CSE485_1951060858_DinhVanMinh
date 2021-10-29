<?php
    include('header.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="wrap">
              <h1 class="tourTitle">Du lịch Hà Nội - Sapa - Bản Cát Cát - Hàm Rồng dịp Lễ 30/4 từ Hà Nội</h1>
                <div class="tourShare">
                    <div class="rating-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="rating-tour">
                        <span><b>1.86/5</b>trong <b>6</b> ĐÁNH GIÁ</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                        data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assest/img/tour-slider1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assest/img/tour-slider2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assest/img/tour-slider3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="box1">
                        <div class="name">Du lịch Hà Nội - Sapa - Bản Cát Cát - Hàm Rồng dịp Lễ 30/4 từ Hà Nội</div>
                        <div class="attr">
                            <ul>
                                <li>
                                    <div class="at">Mã tour:</div>
                                    <div class="as">15786</div>
                                </li>
                                <li>
                                    <div class="at">Thời gian:</div>
                                    <div class="as">3 ngày 2 đêm</div>
                                </li>
                                <li>
                                    <div class="at">Khởi hành:</div>
                                    <div class="as">30/4-02/05/2021</div>
                                </li>
                                <li>
                                    <div class="at">Vận chuyển:</div>
                                    <div class="as">Xe du lịch , Máy bay</div>
                                </li>
                                <li>
                                    <div class="at">Xuất phát:</div>
                                    <div class="as">Từ Hà Nội</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box2">
                      <div class="boxPrice">
                        <div class="price">
                          <div class="txt">Giá từ:</div>
                          <div class="pri">3.499.000 đ</div>
                        </div>
                        <div class="bot">
                          <input readonly type="text" name="dDate" id="dDate" class="form-control bg-white date-readonly dropdown-toggle" value="05-11-2021">
                          <button class="btn-order-tour" type="submit" href="book_tour.php">Đặt tour</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>