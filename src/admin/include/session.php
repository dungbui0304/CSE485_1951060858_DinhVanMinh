<?php
session_start(); //Dịch vụ bảo vệ
if (!isset($_SESSION['loginOK'])) {
    header("Location: login.php");
}
?>