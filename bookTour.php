<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <title>Travel Web</title>
</head>

<body>
    <?php
    include 'config/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2 "></div>
            <div class="col-md-8 ">
                <div class="item-info-combo">
                    <div class="styl-image-booking">
                        <div class="row">
                            <div class="col-md-5 img-booking ">
                                <img class="img-fluid" src="https://pystravel.vn/caches/medium/posts/avatar/1634184994.jpg">
                            </div>
                            <div class="col-md-7 item-info-booking booking-info-tour ">
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
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 "></div>
        </div>
    </div>
    <form action="" method="post">
        <div class="mda-tilte-3">
            <span class="mda-tilte-name">Thông Tin Liên Hệ</span>
        </div>
        <div id="mda-guest-b" class="">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>HỌ TÊN *: <span id="bookNameError" class="error"></span></label>
                        <input type="text" name="txtName" id="name" class="form-control input-tracking1">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email*:<span id="bookEmailError" class="error"></span></label>
                        <input type="text" name="txtEmail" id="email" class="user-email form-control ">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>
                        <input data-error="#bookPhoneError" type="text" name="txtPhone" class="form-control numeric  ">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Địa chỉ *:</label>
                        <textarea type="text" name="txtAddress" class="form-control text_area"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label>Ghi chú:</label>
                        <textarea name="txtNote" class="form-control text_area"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Người lớn: </label>
                        <input type="number" name="QAdult" class="form-control " value="1" min="1" max="20">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Trẻ em : </label>
                        <input type="number" name="QChild" class="form-control " min="0" value="0">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Số lượng phòng đơn </label>
                        <input type="number" name="txtRoom" id="slphongdon" class="form-control" min="0" value="0">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="hidden" id="sumary-hidden" value="3499000">
                        <div class="txtTotal">Tổng giá trị : <span id="sumary">3,499,000</span> <span>đ</span></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

</html>