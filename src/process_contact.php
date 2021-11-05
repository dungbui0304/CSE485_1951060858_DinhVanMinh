<?php 
    if(isset($_POST['send'])){
        $fullName = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
        if(!$conn){
            die("Couldn't connect to database'");
        }else{
            $sql = "INSERT INTO tour_contact (full_name, phone, email,message)
            VALUES ('$fullName','$phone','$email','$message') ";
            $result = mysqli_query($conn, $sql);
            if($result == true){
                header("Location: index.php");
            }
        }
    }

?>