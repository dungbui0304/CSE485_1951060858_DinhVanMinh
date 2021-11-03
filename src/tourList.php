<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./admin/assest/css/style.css">
    <link rel="stylesheet" href="./admin/assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>tìm kiểm</title>
</head>

<body>
    <div class="main">
        <div class="sidebar-menu">
            <header class="logo1">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
            </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                <ul id="menu">
                    <li>
                        <a href="#">
                            <i class="fas fa-tachometer-slowest"></i>
                            <span>Tour List</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-main">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="logo-w3-agile">
                                            <h1><a href="dashboard.php">List Tour</a></h1>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="profile_details w3l">
                                            <div class="wrap">
                                                <i class="fas fa-user" style="color:#fff;"></i>
                                                <ul>
                                                    <li class="name">
                                                        <a href="index.php">Logout</a>
                                                    </li>
                                                    <li class="name italic">Administrator</li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-md">
                <div class="bg-gray-light ">
                    <h4 class="px-5 mx-4 fw-bolder d-flex justify-content ">
                        LIST TOUR
                    </h4>
                </div></br>


                <table class="table table-striped table-bordered">
                    <thead class="table" style="background:#e74c3c;">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Note</th>
                            <th scope="col">NumberPeople</th>
                            <th scope="col">NumberRoom</th>
                    </thead>
                    <tbody>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
                        if (!$conn) {
                            die("Không thể kết nối");
                        }
                        ?>
                        <?php
                        $sql = "SELECT book_id, book_fullName, book_phone, book_email, book_address, book_note, book_numberPeople, book_numberRoom 
                        FROM tour_booking";


                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<th scope="row">' . $row['book_id'] . '</th>';
                                echo '<td>' . $row['book_fullName'] . '</td>';
                                echo '<td>' . $row['book_phone'] . '</td>';
                                echo '<td>' . $row['book_email'] . '</td>';
                                echo '<td>' . $row['book_address'] . '</td>';
                                echo '<td>' . $row['book_note'] . '</td>';
                                echo '<td>' . $row['book_numberPeople'] . '</td>';
                                echo '<td>' . $row['book_numberRoom'] . '</td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table></br></br>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>