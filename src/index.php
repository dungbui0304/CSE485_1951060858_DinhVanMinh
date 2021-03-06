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
    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assest/img/slider.png" class="d-block w-100" alt="...">
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
    <!-- Locations -->
    <div class="container">
        <div class="col-md-12  hp-title">
            <h3 class="title-inline ">
                <a href="" class="style-link-home">
                    <span class="name-tour">Tour hot </span>
                </a>
            </h3>
            <div class="rulers"></div>
        </div>

        <div class="row text-center padding">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
            if (!$conn) {
                die('Unable to connect !');
            }
            $sql = "SELECT * FROM tour_info LIMIT 6 ";
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
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <form action="infoTour.php" method="post">
                            <div class="img-item1">
                                <button type="submit" name="btn">
                                    <a href="" class="img-link">
                                        <img src="<?php echo 'admin/'.$img; ?>" alt="" class="img">
                                    </a>
                                </button>
                            </div>
                            <div class="descriptions">
                                <p class="tittle">Du l???ch <?php echo $destination; ?> t??? <?php echo $startGate; ?></p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <p> <i class="fas fa-calendar"></i>??ang c???p nh???t</p>
                                        <p> <i class="fas fa-clock"></i><?php echo $time; ?></p>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="without-price">
                                            <input readonly type="hidden" name="txt" value="<?php echo $idTour; ?>">
                                        </div>
                                        <div class="price font-price">
                                            <?php echo number_format($price); ?> ??
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include('footer.php') ?>
</body>

</html>