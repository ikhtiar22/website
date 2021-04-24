<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Succesfully";
}
else{
    echo "No Connection";
}
mysqli_select_db($con, 'fromwebsite');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "insert into userinfo(user, email, mobile)
values ('$user', '$email', '$mobile')";

echo "$query";
mysqli_query($con, $query);

?>