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
        <?php include('header.php') ?>
        </div></br></br>
    </div>
    <!-- <div class="container"> -->
    <div class="row bg-gray">
        <!-- <div class="col-md-2"></div> -->
        <?php
        if(isset($_GET['id'])){
            $idd = $_GET['id'];
        }
        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
        if (!$conn) {
            die('Unable to connect !');
        }
        $sql = "SELECT * FROM tour_info WHERE tour_id = '$idd'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $idTour = $row['tour_id'];
                $time = $row['time'];
                $starDate = $row['starting_date'];
                $endDate = $row['ending_date'];
                $startGate = $row['starting_gate'];
                $destination = $row['destination'];
                $price = $row['tour_price'];
                $traffic = $row['tour_traffic'];
                $img = $row['img'];
        ?>
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row border">
                            <div class="col-md-5  ">
                                <button type="submit" name="btn">
                                    <a href="" class="img-link">
                                        <img src="<?php echo $img; ?>" alt="" class="img">
                                    </a>
                                </button>
                            </div><?php
                                }
                            } ?>
                    <div class="col-md-7 item-info-booking booking-info-tour">
                        <h2 class="margin-custom text-title">
                            <?php echo $destination; ?>
                        </h2>
                        <div class="book-attr">
                            <p class="font-14 text-500 padding-top-10-tablet">
                                <span>
                                    <div class="at">
                                        <i class="fas fa-home text-gray"></i>
                                        Khởi hành từ:
                                    </div>
                                    <?php echo $startGate; ?>
                                </span>

                                <br> <span>
                                    <div class="at">
                                        <i class="far fa-clock text-icon "></i>
                                        Thời gian:
                                    </div>
                                    <?php echo $time; ?>
                                </span>

                                <br><span>
                                    <div class="at">
                                        <i class="fas fa-map-marked-alt text-gray"></i>
                                        Điểm đến:
                                    </div>
                                    <?php echo $destination ?>
                                </span>

                                <br>
                            <div class="form-group col-md-12">
                                <input type="hidden" id="sumary-hidden" value="3499000">
                                <div class="txtTotal">Tổng giá trị : <span id="sumary"><?php echo number_format($price); ?> <span>đ</span></div>
                            </div>
                            </p>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2 "></div> -->
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

                    <div class="form-group col-md-6">
                        <label for="l">Số lượng người: </label>
                        <input type="number" name="txtNumber" class="form-control " value="1" min="1" max="20">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slphongdon">Số lượng phòng đơn </label>
                        <input type="number" name="txtRoom" id="slphongdon" class="form-control" min="0" value="0">
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
