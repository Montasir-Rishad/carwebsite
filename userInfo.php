<?php

$conn=mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($conn,'mywebsite');

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

if(isset($_POST['m'])==true)
$gender = 0;
else if(isset($_POST['f'])==true)
$gender =1;
else
$gender=2;



$query ="INSERT INTO insertdata(username,email,mobile,gender,comments) values('$username', '$email', '$mobile', '$gender', '$comments')";



echo "$query";

mysqli_query($conn, $query);
header('location: index.php');

?>