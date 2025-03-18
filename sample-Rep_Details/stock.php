<?php
include_once('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.name{
    display: flex;
     align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    margin-top: 30px;
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
    
}
table {
    width: 80%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    align-items: center;
   
}
thead tr {
    background-color: gray;
    color: #ffffff;
    text-align: left;
}
table  th{
    padding: 12px 15px;
    font-weight: bold;
    text-align: center;
}
table  td{
    padding:15px;
    font-weight: bold;
    text-align: center;
}
tbody tr {
    border-bottom: 1px solid #090042;
}
table tbody:nth-child(even) {
    background-color: #f3f3f3;
    font-weight: bold;
    color: blue;
}
table tbody:nth-last-child() {
    border-bottom: 2px solid #009879;
}
table tbody td button{
    text-decoration:none;
    outline: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 500px;
    border: 1px solid transparent;
    color: #0157f8;
    background-color: #1ED760;
    height: 30px;
  
}

table tbody td button:hover{
    transform: scale(1.04);
    background-color: #21e065;
}

table tbody td button a{
   /* text-decoration: none;
   /* padding: 4px;
   font-size: 15px; */
   color:white;
   font-weight: bold;
   text-align: center;
}
.select{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    
}
.select select{
    font-size: 20px;
}
.select form input{
    padding: 10px;
    width:500px;
    margin-right: 20px;
}
.select form #btn:hover{
    transform: scale(1.04);
    background-color: blue;
    color: #000;
    font-weight: bold;
    font-size: 15px;
   
}
.select form #btn{
    font-size: 15px; 
    width: 200px;
    font-weight: bold;
    font-size: 15px;
    background: linear-gradient(to right, #0ecce5 0%, #090042 100%); 
    color: white;
    border: none;
}
 tbody tr {
    border-bottom: 1px solid #dddddd;
}

 tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
button{
    display: block;
   
    text-decoration: none;
    outline: none;
    cursor: pointer;
    font-size: 20px;
    border-radius: 500px;
    transition-duration: .3s;
    border: 1px solid transparent;
    /* letter-spacing: 2px; */
    /* text-transform: uppercase; */
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
    color: #fff;
    background: linear-gradient(to right, #0ecce5 0%, #090042 100%); 
    height: 30px;
    /* padding: 17px 14px; */

}
button a {
    text-decoration: none;
    outline: none;
    text-align: center;
    color: #fff;

}
.error{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    margin-top: 20px; 
    transform:.4s; 
}

.error h3{
    color:white;
    background: red;
    padding: 10px;
    border-radius:10px;

}
.error h3{
    color:white;
    background: red;
    padding: 10px;
    border-radius:10px;
    border: 1px solid transparent;

}
.error h3:hover{
    transform: scale(1.04);
    background-color: white;
}
.error1 h3{
    color:white;
    background: red;
    padding: 10px;
    border-radius:10px;
    border: 1px solid transparent;

}
.error1 h3:hover{
    transform: scale(1.04);
    background-color: rgba(240, 16, 16, 0.719)
}
</style>
</head>

<body>
<div class="error">
<?php
    if(isset($_GET['error'])){
    if($_GET['error']=="ok"){
        echo '<h3 class="error">Data send Succssfully</h3>';
    } if($_GET['error']=="deleteok"){
        echo '<h3 class="error1">Data Deleted Succssfully</h3>';
        }
    }
?>
</div>
<div class="name">
    <h1>
        Stock Detail
    </h1>
</div>
<div class="select">
<form action="" method="post">
            <!-- <select name="select">
       < ?php

        $query="SELECT * FROM rep";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result)){
        ?>
        <option>< ?php echo $row['repid'];?></option>
        < ?php } ?>
       </select> -->
    <input type="text" name="select" class="repid" placeholder="Search Here...">
    <input type="submit" value="Search" name="submit" id="btn" >
</form>
</div>

    <!-- < ?php  
       if(isset($_REQUEST['submit'])){
            $select=$_REQUEST['select'];
        }
        ?> -->
<div class="container">

        <table>
            <thead>
                <tr>
                    <th>Repid</th>
                    <th>itemno</th>
                    <th>description</th>
                    <th>unitprice</th>
                    <th>soldquantity</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
        
<?php  
    if(isset($_REQUEST['submit'])){
    $select=$_REQUEST['select'];
    $query="SELECT * FROM stock where repid='$select'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $row['repid'];?>
                    </td>
                    <td>
                        <?php echo $row['itemno'];?>
                    </td>
                    <td>
                        <?php echo $row['description'];?>
                    </td>
                    <td>
                        <?php echo $row['unitprice'];?>
                    </td>
                    <td>
                        <?php echo $row['soldquantity'];?>
                    </td>
                    <td><button><a href="stockupdate.php?stockupdateid=<?php echo $row['itemno'];?>">Update</a></button></td>
                    <td><button><a href="delete.php?stockdeleteid=<?php echo $row['itemno'];?>">Delete</a></button></td>
                </tr>
            </tbody>


            <?php
    
}
}else{
        
?>
<?php
    $query="SELECT * FROM stock ";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
?>
    <tbody>
        <tr>
            <td>
                <?php echo $row['repid'];?>
            </td>
            <td>
                <?php echo $row['itemno'];?>
            </td>
            <td>
                <?php echo $row['description'];?>
            </td>
            <td>
                <?php echo $row['unitprice'];?>
            </td>
            <td>
                <?php echo $row['soldquantity'];?>
            </td>
            <td><button id="btn"><a href="stockupdate.php?updateid=<?php echo $row['itemno'];?>">Update</a></button></td>
            <td><button id="btn"><a href="delete.php?stockdeleteid=<?php echo $row['itemno'];?>">Delete</a></button></td>
        </tr>
    </tbody>
<?php
}
}
?>

    </table>

</div>
    <button style=" margin-left:200px;display:block;float:left;"><a href="rep.php">Back</a></button>
    <button style=" margin-left:300px;"><a href="stockadd.php">Add Data</a></button>
</body>

</html>