<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


if ($name == "admin" && $pwd == "admin") {
    header("Location: AdminHome.php");
    exit;
}

$_SESSION['user'] = $name;
$_SESSION['email'] = $email;

$sql = "SELECT * FROM users WHERE name = '$name' AND pwd = '$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    header("Location: UserHome.php");
    exit;
} 
else if ($name == "admin" && $pwd == "admin") {
    header("Location: AdminHome.php");
    exit;
}   
else {
    header("Location: index.html");
    exit;
}

?>
