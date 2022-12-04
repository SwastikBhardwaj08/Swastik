<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into sbwb(name, email, phone, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$name, $email, $phone, $message);
    $stmt->execute();
    echo "form submited....";
    $stmt->close();
    $conn->close();
}
?>