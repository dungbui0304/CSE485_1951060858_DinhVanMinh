<?php
    // Dịch vụ bảo vệ:
    session_start(); //Công ty dịch vụ Bảo vệ
    if(isset($_POST['btnLogin'])){
        $username = $_POST['txtName'];
        $password = $_POST['txtPass'];
        if(empty($password) or empty($username)){
            echo '<script type="text/javascript"> alert("Vui lòng nhập đầy đủ thông tin ");
            window.location="login.php"</script>';
            die();
        }
        try{
            $conn = new PDO("mysql:host=localhost;dbname=db_travel", 'root', '');
        }catch(PDOException $e){
            echo "Có lỗi: ".$e->getMessage();
        }   
        $stmt = $conn->prepare("SELECT * FROM admin WHERE user_name= :user AND password= :pass"); 
        $stmt->bindParam(':user', $username, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $_SESSION['loginOK'] = '';
            echo '<script type="text/javascript"> alert("Đăng nhập thành công ");
            window.location="dashboard.php";</script>';
        }else{
            header("Location: login.php");
        }
    }     
?>