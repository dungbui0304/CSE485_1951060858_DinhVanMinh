<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location: login.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'db_travel');
if (!$conn) {
    die("Không thể kết nối");
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
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Admin Travel</title>
</head>

<body>
    <div class="main">
        <?php include('include/sidebarmenu.php') ?>
        <div class="right-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include('include/header.php') ?>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
                        </ol>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb">
                        <?php
                        if (isset($_SESSION['login'])) {
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                        }
                        ?>
                        <div class="box box1">
                            <i class="fas fa-user-alt"></i></br>
                            <h4>USER</h4>
                            <?php
                            //Sql Query 
                            $sql = "SELECT * FROM tour_user";
                            //Execute Query
                            $res = mysqli_query($conn, $sql);
                            //Count Rows
                            $count = mysqli_num_rows($res);
                            ?>
                            <h1><?php echo $count; ?></h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb">
                        <div class="box box2">
                            <i class="far fa-list-alt"></i></br>
                            <h4>BOOKING</h4>
                            <?php
                            //Sql Query 
                            $sql2 = "SELECT * FROM tour_booking";
                            //Execute Query
                            $res2 = mysqli_query($conn, $sql2);
                            //Count Rows
                            $count2 = mysqli_num_rows($res2);
                            ?>

                            <h1><?php echo $count2; ?></h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb">
                        <!-- <div class="box box3">
                            <i class="fas fa-glass-martini"></i>
                            <h1>Tour</h1>
                            <span>4</span>
                        </div> -->
                        <div class="box box3">
                            <i class="fas fa-glass-martini"></i></br>
                            <h4>TOUR</h4>
                            <?php
                            //Sql Query 
                            $sql3 = "SELECT * FROM tour_info";
                            //Execute Query
                            $res3 = mysqli_query($conn, $sql3);
                            //Count Rows
                            $count3 = mysqli_num_rows($res3);
                            ?>

                            <h1><?php echo $count3; ?></h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb">
                        <div class="box">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb">
                        <div class="box box5">
                            <i class="fas fa-spa"></i>
                            <h1>hi</h1>
                            <span>8</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>