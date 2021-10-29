<?php
    include('sendemail.php');
    // kiểm tra kiểu dữ liệu trên FORM đăng kí đã đúng chưa ?
    if(isset($_POST['submitRegister'])) {
        $user = $_POST['user_name'];
        $fullName = $_POST['fullName'];
        $psw = $_POST['psw'];
        $re_psw = $_POST['re-psw'];
    }

    // bước 1: kết nối với csdl
    $conn = mysqli_connect('localhost','root','','db_travel');
    //bước 2: truy vấn câu lệnh sql
    $sql = "SELECT * FROM admin WHERE user_name='$user' OR full_name='$fullName'";
    $result = mysqli_query($conn,$sql);
    //bước 3: xử lí kết quả
    if(mysqli_num_rows($result) > 0) {
        echo'đã tồn tại';
    }else{
        //băm mật khẩu
        $pass_hash = password_hash($psw,PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));  
        $sql2 = "INSERT INTO admin(user_name,full_name,password) VALUE('$user','$fullName','$pass_hash')";
        $result2 = mysqli_query($conn,$sql2);
        if($result2>=0) {
            echo "success";
            sendEmail($email,$code);
        }
    }
?>