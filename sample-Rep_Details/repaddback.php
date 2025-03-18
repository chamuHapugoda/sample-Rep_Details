<?php
include_once('connection.php');
if(isset($_POST['submit'])){
    $repid=$_POST['repid'];
    $name=$_POST['name'];
    $date=$_POST['startdate'];

if(empty($repid)||empty($name)||$date=="001-01-01"||empty($date)){
        header("location:repadd.php?error=empty");
}else{
    $query="SELECT * FROM rep Where repid='$repid'";
    $result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    header("location:repadd.php?error=userexit");
    exit();
}else{
    $query="INSERT into rep(repid,name,startdate)VALUES('$repid','$name','$date')";
    $result=mysqli_query($conn,$query);
    header("location:repadd.php?error=ok");
} 
}
header("location:rep.php?error=ok");
}
?> 
