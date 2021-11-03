<?php
    include('include/config.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tour_info WHERE tour_id = '$id'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($query);
    }

    if(isset($_POST['submit'])) {
        $tour_price = $_POST['price'];
        $starting_gate = $_POST['starting-gate'];
        $destination = $_POST['destination'];
        $starting_date = $_POST['starting-date'];
        $ending_date =$_POST['ending-date'];
        $time =$_POST['time'];
        $tour_traffic =$_POST['traffic'];
        $description = $_POST['des'];
        $img = 'assest/img/'.$_FILES["image"]["name"];
        echo $img;
        $old_img = $_POST['old_img'];
        if(file_exists("$img")) {
            echo'<script type="text/javascript">alert("Hình ảnh đã tồn tại")</script>';
        }else {
        move_uploaded_file($_FILES["image"]["tmp_name"],"assest/img/".$_FILES["image"]["name"]);
            $sql = "UPDATE tour_info SET 
            tour_price='$tour_price',
            starting_gate='$starting_gate',
            destination='$destination',
            starting_date='$starting_date',
            ending_date='$ending_date',
            time='$time',
            tour_traffic='$tour_traffic',
            description ='$description',
            img='$img' WHERE tour_id='$id'";
        $result = mysqli_query($conn,$sql);
        if($result == true) {
            unlink("$old_img");
            header('Location: dashboard.php');
        }else {
            echo 'error';
        }
        }
    }


?>
<!doctype html>
<html lang="en">

<head>
    <!--d meta tags -->
    <title>Package Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>


    <div class="main">
        <?php include('include/sidebarmenu.php') ?>
        <div class="right-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include('include/header.php')?>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a> <i class="fa fa-angle-right"></i></li>
                        </ol>
                    </div>
                    <div class="wrap-form">
                        <h3 style="color: #1b93e1;font-size: 2em;margin-bottom: 1em;">Update Package</h3>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="group">
                                <div class="form-group">
                                    <label class="col-sm-2 form-label">Tour Price</label>
                                    <input class="col-sm-8 form-input" name="price" type="text" value="<?php echo $row['tour_price']?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Starting-Gate</label>
                                    <input class="col-sm-8 form-input" name="starting-gate" type="text" value="<?php echo $row['starting_gate'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Destination</label>
                                    <input class="col-sm-8 form-input" name="destination" type="text" value="<?php echo $row['destination'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Starting-Date</label>
                                    <input class="col-sm-8 form-input" name="starting-date" type="date" value="<?php echo $row['starting_date'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Ending-Date</label>
                                    <input class="col-sm-8 form-input" name="ending-date" type="date" value="<?php echo $row['ending_date'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Time</label>
                                    <input class="col-sm-8 form-input" name="time" type="text" value="<?php echo $row['time'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Tour Traffic</label>
                                    <input class="col-sm-8 form-input" name="traffic" type="text" value="<?php echo $row['tour_traffic'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Description</label>
                                    <textarea class="col-sm-8 form-input" name="des" id="" cols="50" rows="5"><?php echo $row['description'] ?></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 form-label">Image</div>
                                    <input type="hidden" name="old_img" value="<?php echo $row['img'] ?>">
                                    <div class="form-group-img col-sm-10">
                                        <img src="<?php echo $row['img'] ?>"  alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label">Change Image</label>
                                    <input class="col-sm-8 form-input" name="image" style="border:none;" type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-8">
                                    <button type="submit" name="submit" class="btn-primary btn">Update</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <?php include('include/footer.php') ?>

            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>