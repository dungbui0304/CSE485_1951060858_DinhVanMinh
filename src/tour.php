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
    <?php include('header.php') ?>
    <div class="carousel-inner">
        <section class="food-search text-center">
            <div class="container">
                <form action="process_search.php" method="POST">
                    <input type="search" name="search" placeholder="Nhập địa điểm xuất phát" required>
                    <input type="submit" name="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row">
            <div class="room-bottom">
                <h3>Tour List</h3>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
                if (!$conn) {
                    die('Unable to connect !');
                }
                $sql = "SELECT * FROM tour_info ";
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
                        <div class="row room-btm">
                            <div class="col-md-3 room-left">
                                <a href="infoTour.php?id=<?php echo $idTour; ?>">
                                <img src="<?php echo 'admin/'.$img; ?>" alt="" class="img-responsive img-list"></a>
                            </div>
                            <div class="col-md-9 room-right ">
                                <div class="at">
                                    Tour:
                                </div>
                                <div class="as">
                                    Du lịch <?php echo $destination; ?> từ <?php echo $startGate; ?>
                                </div>


                                <div class="at">
                                    Thời gian:
                                </div>
                                <div class="as">
                                    <?php echo $time; ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="at">
                                    Khởi hành:
                                </div>
                                <div class="as">
                                    <?php echo date("d/m", strtotime($starDate)) . ' - ' . date("d/m/Y", strtotime($endDate)); ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="at">
                                    Xuất phát:
                                </div>
                                <div class="as">
                                    <?php echo $startGate; ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="at">
                                    Giá:
                                </div>
                                <div class="as">
                                    <?php echo number_format($price); ?> đ
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>