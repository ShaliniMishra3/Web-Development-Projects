<?php
$servername="localhost";
$username="root";
$password="";
$database="detail";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we are failed to connect:".mysqli_connect_errno());
    }
    else{
        echo "connected";
        
    }
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
}
$sql="insert into personal_details(user_name,user_email,subject,message)
values('$name','$email','$subject','$message')";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('new record inserted')</script>";
}
else{
    echo "error:",mysqli_error($conn);
}
mysqli_close($conn);
  ?>