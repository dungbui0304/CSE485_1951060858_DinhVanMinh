<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_travel');
    if (!$conn) {
        die('Không thể kết nối');
    }
    ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM tour_user WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);
if ($result == true) {
    header("Location:manage_user.php");
} else {
    echo ("Location:error.php");
}
?>