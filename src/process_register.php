<?php
    if(isset($_POST['btnRegister'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $fullname = $_POST['txtFullname'];
        $email = $_POST['txtEmail'];
        $pass1 = $_POST['txtPass01'];
        $pass2 = $_POST['txtPass02'];
        $phone = $_POST['txtPhone'];
        $date = $_POST['txtDate'];
        if(empty($fullname)  or empty($email) or empty($pass1) or empty($pass2) or empty($phone) or empty($date)) {
            echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin");window.location="register.php";</script>';
            die();
        }
        if($pass1 != $pass2) {
            echo '<script language="javascript">alert("Bạn đã nhập sai mật khẩu");window.location="register.php";</script>';
            die();
        }

    }
// B1. Kết női 08 Server
$conn = mysqli_connect('localhost', 'root','','db_travel');
if(!$conn){
    die( "Không thể kết nối");

}
//b2 Truy văn dữ liệu để kiến tra : 
$sql = "SELECT * FROM tour_user WHERE user_email='$email' or user_phone='$phone'";

$result = mysqli_query($conn, $sql);
// B3. Xử lý kết quả

if(mysqli_num_rows($result) > 0) {
    echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
    die();
}   

else{
    $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
    $sql2 = "INSERT INTO tour_user(user_fullName,user_email, user_pass, user_phone, user_registerDate) 
    VALUES('$fullname','$email','$pass_hash','$phone','$date') ";
    $result2 = mysqli_query($conn, $sql2);

    if($result2 >= 1 ){
        echo '<script language="javascript">alert("Đăng kí thành công"); ;</script>';
        header("Location:index.php");
    }else{
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
    }
}
