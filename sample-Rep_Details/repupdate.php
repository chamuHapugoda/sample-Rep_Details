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
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .container{
            justify-content: center;
            width: 800px;
            margin: auto;
            margin-top: 100px;
           padding: 10px;
           
        }
         h1{
            margin: auto;
            text-align: center;
           padding: 10px;
           color: white;
        }
        .container form{
            border: 1px solid #666;
            /* border-top: none; */
            box-shadow: 5px 5px 5px #666;
            align-items: center;
            padding: 30px;
            background-color: gray;
            
        }
        .container form label{
            margin-left: 20px;
            font-size: 20px;
            margin-top: 40px;

        }
        .container form input{
            width: 97%;
            margin: 10px;
            height: 40px;
            padding: 5px;
            font-size: 17px;
        }
        .container form .btn{
           width: 200px;
           margin-left: 250px;
           background: linear-gradient(to right, #0ecce5 0%, #090042 100%); 
           border: none;
           color: white;
           border-radius: 5px;
           transition-duration: .3s;

        }
        .container form .btn:hover{
            transform: scale(1.04);
        }
        .error{
            text-align: center;
            color: #000;
        }
button{
  background-color: #0157f8;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:hover,
button:focus {
  background-color:#0157f8;
}
a{
    color: while;
}
       

    </style>
</head>
<body>
    <div class="container">
    <form action="repupdateback.php" method="POST" onsubmit="return validateform()" name="myform">
    <h1>Update rep Detail</h1>

    <?php
        if(isset($_GET['updateid'])){
            $updateid=$_GET['updateid'];

            $query="SELECT * FROM rep WHERE repid='$updateid'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){

        ?>
        <input type="hidden" placeholder="Enter rep Id" name="oldrepid" id="repid" value="<?php echo $row['repid']; ?>"><br>
        <label for="">Enter New Rep Id</label><br>
        <input type="text" placeholder="Enter rep Id" name="repid" id="repid" value="<?php echo $row['repid']; ?>"><br>
        <label for="">Enter Name</label><br>
        <input type="text" placeholder="Enter Name" name="name" id="name" value="<?php echo $row['name'];?>"><br>
        <label for="">Enter Start date</label><br>
        <input type="date" placeholder="Enter Start date" name="startdate" id="date" value="<?php echo $row['startdate'];?>"><br>
        <input type="submit" value="Update" name="repupdate" class="btn"><br>
        <h2 id="error" style="text-align: center;"></h2>


<?php
  }
}
?>

        <?php
        if(isset($_GET['error'])){
            if($_GET['error']=="userexit"){
                echo '<h2 class="error">User Alredy Exit</h2>';
            }if($_GET['error']=="ok"){
                echo '<h2 class="error">Deta send Sucessfully</h2>';
            }
        }
    ?>
    </form>
    <a href="rep.php"><button style=" margin-left:20px; margin-top:20px;">Back</button></a>
  
    </div>
   
    <script>
        function validateform(){
            let error=document.getElementById('error');

            if(document.myform.repid.value==""){
                error.innerText="Rep Id is Empty"
                document.myform.repid.focus();
                return false;
            }

            
            if(document.myform.name.value==""){
                error.innerText="Name is Empty"
                document.myform.name.focus();
                return false;
            }

            
            if(document.myform.date.value==""){
                error.innerText="Start date is Empty"
                document.myform.date.focus();
                return false;
            }
        }
    </script>

</body>
</html>