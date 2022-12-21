<?php
include 'connection.php';

$data=mysqli_query($conn,"SELECT * from employee");
$list=array();
if($data->num_rows>0){
    while($row=mysqli_fetch_assoc($data)){
    $mydata['id']=$row['employee_id'];
    $mydata['name']=$row['name'];
    $mydata['address']=$row['address'];
    $mydata['email']=$row['email'];
    $mydata['country']=$row['country'];
    $mydata['number']=$row['phonenumber'];
    $mydata['result']="success";
    $mydata['response']="done";
    array_push($list,$mydata);
    }
}else{
    $mydata['result']="failed";
    array_push($list,$mydata);
}
echo json_encode($list)
?>