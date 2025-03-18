<?php
include_once('connection.php');
if(isset($_POST['submitstock'])){
    $repid=$_POST['repid'];
    $itemno=$_POST['itemno'];
    $description=$_POST['description'];
    $unitprice=$_POST['unitprice'];
    $qty=$_POST['qty'];

   
$query="SELECT * FROM rep Where repid='$repid'";
$result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $query="SELECT * FROM stock Where itemno='$itemno'";
            $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location:stockadd.php?error=itemexit");
            exit(); 
        }else{
        if(empty($repid)||empty($itemno)||empty($description)||empty($unitprice)||empty($qty)){
            header("location:stockadd.php?error=empty");
        }else{
            $query="INSERT into stock(itemno,description,unitprice,soldquantity,repid)VALUES('$itemno','$description','$unitprice','$qty','$repid')";
            $result=mysqli_query($conn,$query);
            header("location:stock.php?error=ok"); 
        } 
        }

        }else{
            header("location:stockadd.php?error=userexit");
            exit();
        } 

header("location:stock.php?error=ok");
}
?> 