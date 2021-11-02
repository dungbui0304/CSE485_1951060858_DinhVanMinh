<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <title>Login</title>
</head>

<body class="bg-login">
<div class="container wrapper">
        <div class="wrap">
            <form action="process_login.php" method="post"class="form text-center">
                <div class="title">Login User</div>
                <div class="user">
                    <input class="input" type="text" name="txtName" value="" placeholder="Name">
                </div>
                <div class="psw">
                    <input class="input border-top" type="password" name="txtPass" value="" placeholder="Password">
                </div>
                <button class="btn btn-log" type="submit" name ="btnLogin">SIGN IN</button>
            </form>
            <p class="text">Forgot <a href="" class="text-link">UserName / Password</a></p>
            <p class="text">Createan account?<a class="text-link" href="register.php">Sign up</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>