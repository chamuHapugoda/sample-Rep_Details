<?php
include_once('connection.php');
if(isset($_POST['updatestock'])){
    $olditemno=$_POST['olditemno'];
     $repid=$_POST['repid'];
    $itemno=$_POST['itemno'];
     $description=$_POST['description'];
     $unitprice=$_POST['unitprice'];
     $qty=$_POST['qty'];

     $query="SELECT * FROM stock Where repid='$repid'";
     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)>0){
     $query2="SELECT * FROM stock Where itemno='$itemno'";
     $result2=mysqli_query($conn,$query2);
     if(mysqli_num_rows($result2)>0){
         

           $query="UPDATE Stock SET description='$description',unitprice='$unitprice',soldquantity='$qty',repid='$repid' WHERE itemno='$itemno' ";
                $result=mysqli_query($conn,$query);
                header("location:stock.php?error=ok"); 
      }else{
        header("location:stock.php?error=userexit");
           exit();
            } 
                header("location:stock.php?error=userexit");
            exit();
        }else{
            header("location:stock.php?error=userexit");
            exit();
        }
   }

header("location:stock.php?error=ok");

?> 

