<?php
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$country=$_POST['country'];
$number=$_POST['phone'];
$password=$_POST['password'];


$data1=mysqli_query($conn,"INSERT into login(email,password) values('$email','$password')");
$log_id=mysqli_insert_id($conn);
$data2=mysqli_query($conn,"INSERT into user(name,address,country,phonenumber,login_id) values('$name','$address','$country','$number','$log_id')");

if($data1 && $data2){
    $mydata['result']="success";
    $mydata['response']="done";
}else{
    $mydata['result']="failed";
}
echo json_encode($mydata);
?>