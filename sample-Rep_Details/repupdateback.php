<?php
include_once('connection.php');
if(isset($_POST['repupdate'])){
    $oldrepid=$_POST['oldrepid'];
     $repid=$_POST['repid'];
      $name=$_POST['name'];
     $date=$_POST['startdate'];


     $query="SELECT * FROM rep Where repid='$repid'";
     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)>0){
     $query="SELECT * FROM rep Where repid='$updateid'";
     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)>0){
         header("location:rep.php?error=userexit");
           exit();
      }else{
        $query="UPDATE rep SET repid='$repid',name='$name',startdate='$date' WHERE repid='$oldrepid'";
                $result=mysqli_query($conn,$query);
                header("location:repupdate.php?error=ok"); 
            } 
                header("location:rep.php?error=userexit");
            exit();
        }else{
            header("location:repadd.php?error=userexit");
            exit();
        }
    }

header("location:rep.php?error=ok");

?> 
