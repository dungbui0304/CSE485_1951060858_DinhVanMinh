<?php
    if (isset($_POST['btnSuccess'])) {
        $Name = $_POST['txtName'];
        $Mail = $_POST['txtEmail'];
        $Phone = $_POST['txtPhone'];
        $Address = $_POST['txtAddress'];
        $Note = $_POST['txtNote'];
        $Room = $_POST['txtRoom'];
        $id = 'abc';
        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
        if (!$conn) {
            die("Không thể kết nối !");
        }
        $sql = "INSERT INTO tour_user( user_full, user_phone, user_email, user_address, user_note, user_number_room) 
            VALUES ('$Name','$Phone','$Mail','$Address','$Note','$Room')";

        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result == true){
            // echo "Success";
            header("location: index.php");
        }
        else{
            echo "Eroor";
        }
    }
?>