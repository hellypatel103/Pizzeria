<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$pwd = $_POST['pwd'];

if($name == null || $email == null){
    header("Location: index.html");
    exit;
}

$_SESSION['user'] = $name;
$_SESSION['email'] = $email;

$sql = "INSERT INTO users(name, phno, email, pwd) VALUES ('$name', '$phno', '$email', '$pwd')";
if (mysqli_query($conn, $sql)) {
    header("Location: UserHome.php");
}
?>