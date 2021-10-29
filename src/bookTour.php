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
                                <a class="nav-link text-white" href="tour.php">
                                    <i class="fas fa-plane-arrival"></i>TOUR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">COMBO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">KHÁCH SẠN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><i class="fas fa-user"></i>ĐĂNG NHẬP</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div></br></br>
    </div>
    <!-- <div class="container"> -->
    <div class="row bg-gray">
        <div class="col-md-2 "></div>

        <dvi class="col-md-8 ">
            <div class="item-info-combo">
                <div class="styl-image-booking">
                    <div class="row">
                        <div class="col-md-5 img-booking ">
                            <img class="img-fluid" src="https://pystravel.vn/caches/medium/posts/avatar/1634184994.jpg">
                        </div>
                        <div class="col-md-7 item-info-booking booking-info-tour border">
                            <p class="margin-custom text-title">
                                Hà Nội - Hòa Bình BaKhan Resort 4 sao 2 ngày 1 đêm
                            </p>
                            <div class="item-booking">
                                <p class="font-14 text-500 padding-top-10-tablet margin-custom page_speed_174317768">
                                    <i class="fas fa-home text-gray"></i>
                                    <span>
                                        Khởi hành từ:
                                        Hà Nội
                                    </span>

                                    <br>
                                    <i class="far fa-clock text-icon page_speed_1227319642"></i>
                                    <span>
                                        2 ngày 1 đêm
                                    </span>

                                    <br>
                                    <i class="fas fa-map-marked-alt text-gray"></i>
                                    <span>
                                        Điểm đến:
                                        Hòa Bình
                                    </span>

                                    <br>
                                    <i class="fas fa-map-marked-alt text-gray"></i>
                                    <span>
                                        Điểm đến:
                                        Hòa Bình
                                    </span>
                                <div class="form-group col-md-12">
                                    <input type="hidden" id="sumary-hidden" value="3499000">
                                    <div class="txtTotal">Tổng giá trị : <span id="sumary">3,499,000</span> <span>đ</span></div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </dvi>
        <div class="col-md-2 "></div>
    </div></br></br>
    <!-- </div> -->
    <form action="process_bookTour.php" method="post">
        <div class="mda-tilte-3">
            <span class="mda-tilte-name">Thông Tin Liên Hệ</span>
        </div>
        <div id="mda-guest-b" class="">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">HỌ TÊN *: <span id="bookNameError" class="error"></span></label>
                        <input type="text" name="txtName" id="name" class="form-control input-tracking1">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email*:<span id="bookEmailError" class="error"></span></label>
                        <input type="text" name="txtEmail" id="email" class="user-email form-control ">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>
                        <input type="text" name="txtPhone" id="phone" class="form-control numeric  ">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address">Địa chỉ *:</label>
                        <textarea type="text" name="txtAddress" id="address" class="form-control text_area"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="note">Ghi chú:</label>
                        <textarea name="txtNote" class="form-control text_area" id="note"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="l">Người lớn: </label>
                        <input type="number" name="QAdult" class="form-control " value="1" min="1" max="20">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Trẻ em : </label>
                        <input type="number" name="QChild" class="form-control " min="0" value="0">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="slphongdon">Số lượng phòng đơn </label>
                        <input type="number" name="txtRoom" id="slphongdon" class="form-control" min="0" value="0">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="hidden" id="sumary-hidden" value="3499000">
                        <div class="txtTotal">Tổng giá trị : <span id="sumary">3,499,000</span> <span>đ</span></div>
                    </div>
                    <div class="text-center" style="margin-top: 10px">
                        <input class="btn-primary btn" type="submit" name="btnSuccess" value="HOÀN THÀNH">
                    </div>
                </div>
            </div>
        </div>
    </form></br></br>
</body>

</html>