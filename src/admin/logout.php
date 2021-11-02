<?php
    session_start(); //Dịch vụ bảo vệ
    if(isset($_SESSION['loginOK'])){
        unset($_SESSION['loginOK']);
        echo '<script type="text/javascript"> alert("Xác thực");
            window.location="login.php"</script>';
    }

?> 
