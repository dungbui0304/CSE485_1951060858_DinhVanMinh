<?php
if (isset($_POST['btnSuccess'])) {
    $Name = $_POST['txtName'];
    $Mail = $_POST['txtEmail'];
    $Phone = $_POST['txtPhone'];
    $Address = $_POST['txtAddress'];
    $Note = $_POST['txtNote'];
    $Number = $_POST['txtNumber'];
    $Room = $_POST['txtRoom'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
    if (!$conn) {
        die("Không thể kết nối !");
    }
    $sql = "INSERT INTO tour_booking(book_fullName, book_phone,book_email,  book_address, book_note, book_numberPeople, book_numberRoom) 
        VALUES ('$Name','$Phone','$Mail','$Address','$Note','$Number','$Room]')";
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        echo '<script type="text/javascript"> alert("Đăng ký thành công ");</script>';
        header("Location:tourList.php?mail=$Mail");
    }
}
