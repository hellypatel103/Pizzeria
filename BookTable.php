<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$sql = "INSERT INTO booking(name, phno, email, date, time) VALUES ('$name', '$phno', '$email', '$date', '$time')";
if (mysqli_query($conn, $sql)) {

    header("Location: UserHome.php");
}
?>