<?php
include_once('connection.php');
if(isset($_POST['submit'])){
    $repid=$_POST['repid'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);

    $query="SELECT * FROM user Where username='$username' AND repid=''";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        header("location:reg.php?error=userexit");
        exit();
    }else{
    $query="INSERT into user(repid,username,password)VALUES('$repid','$username','$password')";
    $result=mysqli_query($conn,$query);
    header("location:reg.php?error=ok");
} 
}
header("location:log.php?error=ok");

?> 