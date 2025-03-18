<!-- rep delete -->

<?php
if(isset($_GET['repdeleteid'])){
include_once('connection.php');
    $repid=$_GET['repdeleteid'];

    $query="SELECT * FROM stock Where repid='$repid'";
    $result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
        header("location:rep.php?error=cantdelete");
        exit();
}else{
    $query=" DELETE FROM rep WHERE repid='$repid'";
    $result=mysqli_query($conn,$query);
    header("location:rep.php?error=deleteok");
    }
}
?>


<!-- stock delete -->


<?php
if(isset($_GET['stockdeleteid'])){
include_once('connection.php');
    $itemno=$_GET['stockdeleteid'];
    
    $query=" DELETE FROM stock WHERE itemno='$itemno'";
    $result=mysqli_query($conn,$query);
    header("location:stock.php?error=deleteok");
}
?>