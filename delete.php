<?php
include 'connection.php';

$emp_id=$_POST['id'];

$data=mysqli_query($conn,"DELETE from employee WHERE employee_id=$emp_id");

if($data){
    $mydata['result']="success";
    $mydata['response']="done";
} else{
    $mydata['result']="failed";
 
}
echo json_encode($mydata);
?>