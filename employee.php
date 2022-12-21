<?php
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$country=$_POST['country'];
$number=$_POST['phone'];

$data=mysqli_query($conn,"INSERT into employee(name,address,email,country,phonenumber) values('$name','$address','$email','$country','$number')");

if($data){
    $mydata['result']="success";
    $mydata['response']="done";
}else{
    $mydata['result']="failed";
}
echo json_encode($mydata);
?>