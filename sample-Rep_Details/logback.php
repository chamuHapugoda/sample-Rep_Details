<?php
session_start();
if(isset($_POST['submit'])){
    include('connection.php');
    $username=$_REQUEST['name'];
    $password=md5($_REQUEST['password']);
   
    $query="SELECT * from user WHERE username='$username' And password='$password'";
    $result=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
            $_SESSION['repid']=$row['repid'];
            $_SESSION['username']=$row['username'];
            header("location:rep.php?error=login");
    }else{
        header("location:log.php?error=invalid");
        exit();
    }
}
    ?>
      