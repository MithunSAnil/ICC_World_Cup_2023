<?php
$username = $_POST['username'];
$password = $_POST['password'];
$userRole = $_POST['userRole'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into userdetail(username,password,userRole) values(?, ?, ?)");
    $stmt->bind_param("sss",$username,$password,$userRole);
    $stmt->execute();
    echo "New User Registered Successfully";
    echo "<script> location.href='loginPage.html'; </script>";
    exit;
}
?>