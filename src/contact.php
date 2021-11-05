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
    <title>Contact</title>
</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>
    <div class="container" style="max-width:1200px; border:solid 1px rgba(0,0,0,.15); margin-top: 40px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="tourName">Combo Du Lịch Khách Sạn Belresort </h2>
                <div class="t1">DU LỊCH TỰ CHỌN</div>
                <div class="beWrap">
                    <div class="be">
                        <a href="dulich@gmail.com.vn">

                        </a>
                    </div>
                    <div class="be"></div>
                    <div class="phoneWrap">
                        <div class="hotline">0909502588 0944242705</div>
                    </div>
                    <div class="img text-center">
                        <img src="./assest/img/contact.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form action="process_contact.php" method="POST">
                    <div class="form-group">
                        <label class="label">Họ Tên</label>
                        <div class="div_input">
                            <input type="text" class="name" name="full_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label">Số điện thoại</label>
                        <div class="div_input">
                            <input type="text" class="name" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label">Email</label>
                        <div class="div_input">
                            <input type="text" class="name" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label">Yêu cầu</label>
                        <div class="div_input">
                            <input type="text" class="name" name="message">
                        </div>
                    </div>
                    <button type="submit" name="send" class="btn-contact">Gửi</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>