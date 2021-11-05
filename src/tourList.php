<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location: index.php");
}
?>
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
<?php include('header.php') ?>
        <div class="mda-tilte-3">
            <h1>Thông Tin Đăng Ký:</h1>
            <h1>Đăng Ký Thành Công</h1>
        </div>
        <?php
        // if (isset($_POST['btnSuccess'])) {
        //     $Name = $_POST['txtName'];
        //     $Mail = $_POST['txtEmail'];
        //     $Phone = $_POST['txtPhone'];
        //     $Address = $_POST['txtAddress'];
        //     $Note = $_POST['txtNote'];
        //     $Number = $_POST['txtNumber'];
        //     $Room = $_POST['txtRoom'];
        if(isset($_GET['mail'])){
            $mail = $_GET['mail'];
        }
        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');

        $sql = "SELECT * FROM tour_booking WHERE  book_email ='$mail'";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            if (mysqli_num_rows($result)) {
                $row_current = mysqli_fetch_assoc($result);
            }
        }
        ?>
        <div id="mda-guest-b" class="">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">HỌ TÊN *: <span id="bookNameError" class="error"></span></label>
                        <input type="text" name="txtName" id="name" class="form-control input-tracking1" value="<?php echo $row_current['book_fullName']; ?> ">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email*:<span id="bookEmailError" class="error"></span></label>
                        <input type="text" name="txtEmail" id="email" class="user-email form-control "value="<?php echo $row_current['book_email']; ?> ">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>
                        <input type="text" name="txtPhone" id="phone" class="form-control numeric  "value="<?php echo $row_current['book_phone']; ?> ">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="address">Địa chỉ *:</label>
                        <input type="text" name="txtAddress" id="address" class="form-control text_area"value="<?php echo $row_current['book_address']; ?> "></input>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="note">Ghi chú:</label>
                        <input name="txtNote" class="form-control text_area" id="note"value="<?php echo $row_current['book_note']; ?> "></input>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Số lượng người: </label>
                        <input type="text" name="txtNumber" class="form-control "value="<?php echo $row_current['book_numberPeople']; ?> ">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="slphongdon">Số lượng phòng đơn </label>
                        <input type="text" name="txtRoom" id="slphongdon" class="form-control"value="<?php echo $row_current['book_numberRoom']; ?> ">
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include('footer.php')?>
</body>

</html>