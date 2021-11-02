<?php
    // kiểm tra kiểu dữ liệu trên FORM đăng kí đã đúng chưa ?
    if(isset($_POST['btnRegister'])){
        $fullname = $_POST['txtFullname'];
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $pass1 = $_POST['txtPass01'];
        $pass2 = $_POST['txtPass02'];
        $phone = $_POST['txtPhone'];
        $date = $_POST['txtDate'];
        if(empty($fullname) or empty($name) or empty($email) or empty($pass1) or empty($pass2) or empty($phone) or empty($date)) {
            echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin");window.location="register.php";</script>';
            die();
        }
        if($psw != $re_psw) {
            echo '<script language="javascript">alert("Bạn đã nhập sai mật khẩu");window.location="register.php";</script>';
            die();
        }
    }

    // bước 1: kết nối với csdl
    $conn = mysqli_connect('localhost','root','','db_travel');
    //bước 2: truy vấn câu lệnh sql
    $sql = "SELECT * FROM tour_user WHERE user_name='$user' OR user_email='$email'";
    $result = mysqli_query($conn,$sql);
    //bước 3: xử lí kết quả
    if(mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
        die();
    }   

    else{
        //băm mật khẩu
        $pass_hash = password_hash($psw,PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO tour_user(user_fullName, user_name, user_email, user_pass, user_phone, user_registerDate) 
                                VALUES('$fullname','$name','$email','$pass_hash','$phone','$date') ";
        $result2 = mysqli_query($conn,$sql2);
        if($result2>=0 ) {
            echo '<script language="javascript">alert("Đăng kí thành công"); window.location="index.php";</script>';
            // header("Location: index.php");
            // sendEmail($email,$code);  
        }else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
        }
    }
?>1