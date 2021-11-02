<?php
    if(isset($_POST['submit'])) {
        $tour_price = $_POST['price'];
        $starting_gate = $_POST['starting-gate'];
        $destination = $_POST['destination'];
        $starting_date = $_POST['starting-date'];
        $ending_date =$_POST['ending-date'];
        $time =$_POST['time'];
        $tour_traffic =$_POST['traffic'];
        $img =$_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]);
    include('include/config.php');
    $sql = "INSERT INTO tour_info (tour_price,starting_gate,destination,starting_date,ending_date,time,tour_traffic)
                            VALUES($tour_price,$starting_gate,$destination,$starting_date,$ending_date,$time,$tour_traffic)";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header('Location:dashboard.php');
    }else {
        echo'error';
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
                        <h3 style="color: #1b93e1;font-size: 2em;margin-bottom: 1em;">Create Package</h3>
                        <form method="POST">
                            <div class="group">
                                <div class="form-group">
                                    <label class="col-sm-2 form-label" for="">Tour Price</label>
                                    <input class="col-sm-8 form-input" name="price" type="text" placeholder="Tour Price"
                                        require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Starting-Gate</label>
                                    <input class="col-sm-8 form-input" name="starting-gate" type="text"
                                        placeholder="Starting Gate" require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Destination</label>
                                    <input class="col-sm-8 form-input" name="destination" type="text"
                                        placeholder="Destination" require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Starting-Date</label>
                                    <input class="col-sm-8 form-input" name="starting-date" type="date"
                                        placeholder="Starting Date" require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Ending-Date</label>
                                    <input class="col-sm-8 form-input" name="ending-date" type="date"
                                        placeholder="Ending Date" require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Time</label>
                                    <input class="col-sm-8 form-input" name="time" type="text" placeholder="Time"
                                        require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Tour Traffic</label>
                                    <input class="col-sm-8 form-input" name="traffic" type="text"
                                        placeholder="Tour Traffic" require>
                                </div>
                                <div class="form-group">
                                    <label for class="col-sm-2 form-label" for="">Image</label>
                                    <input class="col-sm-8 form-input" name="image" style="border:none;" type="file"
                                        placeholder=" Image" require>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-8">
                                    <button type="submit" name="submit" class="btn-primary btn">Create</button>
                                    <button type="reset" class="btn-secondary btn">Reset</button>
                                </div>

                            </div>

                        </form>

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