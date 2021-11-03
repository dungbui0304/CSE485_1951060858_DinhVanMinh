<?php
    if (isset($_POST['btnSuccess'])) {
        $Name = $_POST['txtName'];
        $Phone = $_POST['txtPhone'];
        $Mail = $_POST['txtEmail'];
        $Address = $_POST['txtAddress'];
        $Note = $_POST['txtNote'];
        $Number = $_POST['txtNumber'];
        $Room = $_POST['txtRoom'];
        $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
        if (!$conn) {
            die("Không thể kết nối !");
        }
        $sql = "INSERT INTO tour_booking(book_fullName, book_phone, book_email, book_address, book_note, book_numberPeople, book_numberRoom) 
        VALUES ('$Name','$Mail','$Phone','$Address','$Note','$Number','$Room]')";

        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result == true){
            echo '<script type="text/javascript"> alert("Đăng ký thành công ");
            window.location="listTour.php";</script>';
        }
        else{
            echo "Eroor";
        }
    }
?>