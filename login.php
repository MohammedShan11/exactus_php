<?php
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];
$data=mysqli_query($conn,"SELECT * from login where email='$email'&& password='$password'");
if($data->num_rows>0){
    while($row=mysqli_fetch_assoc($data)){
        $mydata['message']='user successfully logged in';
        $mydata['login_id']=$row['login_id'];
    }
}else{
    $mydata['message']='failed to login';
}
echo json_encode($mydata);
?>