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
    margin-top: -100px;
    padding: 10px;
           
}
.container  h1{
    margin: auto;
    text-align: center;
    padding: 10px;
    color: black;
    font-size: 50px;
}
.container form{
    border: 1px solid #666;
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
   color: white;
}

h3{
    text-align: center;
    padding-top: 20px;
    font-family: Verdana, Tahoma, sans-serif;
}

h3 a{
    text-decoration: none;
    color: red;
    
}

h3 a:hover{
    text-decoration:underline;
    color: black;
    
}

.top{
    /* border: 2px solid rgb(0, 247, 255); */
    height: 140px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 12px 12px 0 0;
    position: relative;
}

.top img{
    height: 200%; 
    /* margin-top: 300px; */
    margin-right: 500px;  
}       
   
       

</style>
</head>
<body>
<div class="top">
    <img src="image/pic-3.png" alt="">
</div>
<div class="container">
        
<form action="regback.php" method="POST" onsubmit="return validateform()" name="myform">
    <h1> Register </h1>
        <label for="">Enter Rep Id</label><br>
        <input type="text" placeholder="Enter  Rep Id" name="repid" id="repid"><br>
        <label for="">Enter User Name</label><br>
        <input type="text" placeholder="Enter User Name" name="username" id="username"><br>
        <label for="">Enter Password</label><br>
        <input type="password"  name="password" id="password"><br>
        <label for="">Enter Conform Password</label><br>
        <input type="password"  name="repassword" id="repassword"><br>
        <input type="submit" value="Register" name="submit" class="btn"><br>
        <h3>if  You   Alredy  Have  an  account  ?<a href="log.php"> Sign In </a> now</h3>
        <h2 id="error" style="text-align:center;margin-top:30px;color:red"></h2>

        <?php
        if(isset($_GET['error'])){
            if($_GET['error']=="userexit"){
                echo '<h2 class="error">User Rep Id Not found</h2>';
            }if($_GET['error']=="empty"){
                echo '<h2 class="error">Plase Fill the data</h2>';
            }if($_GET['error']=="ok"){
                echo '<h2 class="error">Deta send Sucessfully</h2>';
            } if($_GET['error']=="itemexit"){
                echo '<h2 class="error">Item No Alredy Exit</h2>';
            }
        }
    ?>
</form>
   
</div>
   
<script>
    function validateform(){
    let error=document.getElementById('error');

        if(document.myform.repid.value==""){
        error.innerText="Rep Id Feild is Empty"
        document.myform.repid.focus();
        return false;
            }

        if(document.myform.username.value==""){
        error.innerText="Username Feild is Empty"
        document.myform.username.focus();
        return false;
            }
        if(document.myform.password.value==""){
        error.innerText="password Feild is Empty"
        document.myform.password.focus();
        return false;
            }

            
        if(document.myform.repassword.value==""){
        error.innerText="Confirm Password Feild is Empty"
        document.myform.repassword.focus();
        return false;
            }

        if(document.myform.password.value!=document.myform.repassword.value){
        error.innerText="password is Dosn't Match"
        document.myform.repassword.focus();
        return false;
            }
        } 
</script>

</body>
</html>