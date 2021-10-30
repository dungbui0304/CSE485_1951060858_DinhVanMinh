<?php
    //URL kích hoạt email có dạng phương thức GET
    $email = $_GET['email'];
    $code = $_GET['code'];
    // bước 1: kết nối với csdl
    $conn = mysqli_connect('localhost','root','','db_travel');
    //bước 2: truy vấn câu lệnh sql
    $sql = "SELECT * FROM admin WHERE user_email='$email' OR user_code='$code'";
    $result = mysqli_query($conn,$sql);
    //bước 3: xử lí kết quả
    if(mysqli_num_rows($result) > 0) {
        $sql2 = "UPDATE admin SET user_status=1 WHERE user_email='$email'";
        $result2 = mysqli_connect($conn,$sql2);
        if($result2>0) {
            echo 'tài khoản đã được kích hoạt';
        }else {
            echo'không thể kích hoạt';
        }
    }
?>