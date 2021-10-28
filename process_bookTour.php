<?php
    if (isset($_POST['btnSave'])) {
        $Name = $_POST['txtName'];
        $Mail = $_POST['txtEmail'];
        $Phone = $_POST['txtPhone'];
        $Adderss = $_POST['txtAddress'];
        $Note = $_POST['txtNote'];
        $Room = $_POST['txtRoom'];
        $id = '1';
    $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
    if (!$conn) {
        die('Không thể kết nối');
    }
    $sql = "INSERT INTO tour_user(user_id, user_full, user_phone, user_email, user_address, user_note, user_number_room) 
    VALUES ('1',$Name','$Mail','$Phone','$Address','$Note','$Room')";

    echo $sql;
    $result = mysqli_query($conn, $sql);


    if ($result == true) {
        header("Location:index.php");
    } else {
        echo ("Location:error.php");
    }}

   // mysqli_close($conn);


    ?>