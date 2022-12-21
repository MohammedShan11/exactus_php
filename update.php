<?php
include 'connection.php';

$emp_id=$_POST['employee_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$country=$_POST['country'];
$number=$_POST['phone'];

$data=mysqli_query($conn,"UPDATE employee SET name='$name',email='$email',address='$address',country='$country',phonenumber='$number' WHERE employee_id='$emp_id'");

if($data){
    $mydata['result']="success";
    $mydata['response']="done";
} else{
    $mydata['result']="failed";
 
}
echo json_encode($mydata);
?>