<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/style.css">
</head>

<body class="bg-login" action="process_register.php" method="POST">
    <div class="container wrapper">
        <div class="wrap">
            <form action="process_register.php" method="post" class="form text-center">
                <div class="title">Register</div>
                <div class="user_fullName">
                    <input class="input" type="text" name="txtFullname" value="" placeholder="Full Name">
                </div>
                <div class="user_name">
                    <input class="input" type="text" name="txtName" value="" placeholder="Name">
                </div>
                <div class="email">
                    <input class="input" type="email" name="txtEmail" value="" placeholder="Email">
                </div>
                <div class="psw">
                    <input class="input border-top" type="password" name="txtPass01" value="" placeholder="Password">
                </div>
                <div class="re-psw">
                    <input class="input border-top" type="password" name="txtPass02" value="" placeholder="Repeat PassWord">
                </div>
                <div class="user_phone">
                    <input class="input border-top" type="text" name="txtPhone" value="" placeholder="Phone">
                </div>
                <div class="user_registerDate">
                    <input class="input border-top" type="date" name="txtDate" value="" placeholder="Register Date">
                </div>
                <button class="btn btn-log" type="submitRegiter" name="btnRegister">SIGN UP</button>
            </form>
            <p class="text">Already have an account? <a href="login.php" class="text-link">Login here</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>