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
                    <div class="container-md">
                        <div class="bg-gray-light ">
                            <h3 class="mx-4 d-flex justify-content" style="color: #1b93e1;">Manage Packages</h3>
                        </div></br>


                        <table class="table table-striped table-bordered">
                            <thead class="table" style="background:#e74c3c; color:#fff;">

                                <tr style="height: 80px;line-height: 60px;">
                                    <th scope="col">ID</th>
                                    <th scope="col">Starting Gate</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Tour Traffic</th>
                                    <th scope="col">Actions</th>
                            </thead>
                            <tbody>
                                <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
                        if (!$conn) {
                            die('Không thể kết nối');
                        }
                        ?>
                                <?php
                        $sql = "SELECT tour_id, starting_gate, destination, time, tour_traffic
                        FROM tour_info";


                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr style="height: 100px;line-height: 100px;">';
                                echo '<th scope="row">' . $row['tour_id'] . '</th>';
                                echo '<td>' . $row['starting_gate'] . '</td>';
                                echo '<td>' . $row['destination'] . '</td>';
                                echo '<td>' . $row['time'] . '</td>';
                                echo '<td>' . $row['tour_traffic'] . '</td>';
							    echo '<td><a href="update_package.php?id='.$row['tour_id'].'">
                                            <button type="button" class="btn btn-primary btn-block">View Details</button>
                                          </a>
                                     </td>';   
                                echo '</tr>';
                            }
                        }
                        ?>
                            </tbody>
                        </table></br></br>
                    </div>
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