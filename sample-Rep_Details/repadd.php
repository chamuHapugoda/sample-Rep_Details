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
    width: 600px;
    margin: auto;
    margin-top: 100px;
    padding: 10px;
           
}
.container h1{
    margin: auto;
    text-align: center;
    padding: 5px;
    color: black;
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
    background: transparent;
}
.container form .btn{
    width: 200px;
    margin-left: 150px;
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
    color: red;
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
   color: white;
}
       

</style>
</head>
<body>
<div class="container">
<form action="repaddback.php" method="POST" onsubmit="return validateform()" name="myform">
    <h1>Add rep Detail</h1>
        <label for="">Enter Rep Id</label><br>
        <input type="text" placeholder="Enter rep Id" name="repid" id="repid"><br>
        <label for="">Enter Name</label><br>
        <input type="text" placeholder="Enter Name" name="name" id="name"><br>
        <label for="">Enter Start date</label><br>
        <input type="date" placeholder="Enter Start date" name="startdate" id="date"><br>
        <input type="submit" value="Submit" name="submit" class="btn"><br>
        <h2 id="error" style="text-align: center;"></h2>

<?php
    if(isset($_GET['error'])){
    if($_GET['error']=="userexit"){
        echo '<h2 class="error">User Alredy Exit</h2>';
    }if($_GET['error']=="empty"){
        echo '<h2 class="error">Plase Fill the data</h2>';
    }if($_GET['error']=="ok"){
        echo '<h2 class="error">Deta send Sucessfully</h2>';
    }
            //   if($_GET['error']=="ok"){
            //     echo '<script>';
            //      echo 'alert ("Deta send Sucessfully")';
            //      echo '</script>';
            // }
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