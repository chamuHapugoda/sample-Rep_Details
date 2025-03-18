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
body{
    background: white;
           
}
.container{
    justify-content: center;
    width: 500px;
    margin: auto;
    margin-top: 5px;
    padding: 5px;
    background:white;
           
}
h1{ 
    margin: auto;
    text-align: center;
    color: black; 
    font-size: 50px;
} 
.container form{
    border: 1px solid #666;
    border-top: 1px solid #666;
    box-shadow: 5px 5px 5px #666;
    align-items: center;
    padding: 30px;
    background: gray;
            
}
.container form label{
    margin-left: 20px;
    font-size: 20px;
    margin-top: 40px;

}
.container form input{
    width: 95%;
    margin: 10px;
    height: 40px;
    padding: 5px;
    font-size: 17px;
    background: transparent;
}
.container form .btn{
    width: 200px;
    margin-left: 100px;
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
    background: red;
}
a{
    color: white;
}
h3{
    text-align: center;
    padding-top: 20px;
    font-family: Verdana, Tahoma, sans-serif;
    font-size: 15px;
}
h3 a{
    text-decoration: none;
    font-size: 15px;
    color: red;
    
}
h3 a:hover{
    text-decoration:underline;
    color: black;
    
}
.error1 h3{
    color:white;
    background: #d71e1e;
    padding: 10px;
    border-radius:10px;
    border: 1px solid transparent;

}
.error1 h3:hover{
    transform: scale(1.04);
    background-color: rgba(240, 16, 16, 0.719)
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
    height: 100%; 
    margin-top: 200px;
    margin-right: 450px;  
}       

</style>
</head>
<body>
<div class="error">
<?php
    if(isset($_GET['error'])){
    if($_GET['error']=="ok"){
    echo '<h3 class="error">Register Succssfully</h3>';
        }
    }
    ?>
</div>

<div class="top">
    <img src="image/pic-2.png" alt="">
</div>

<div class="container">
        
<form action="logback.php" method="POST" onsubmit="return validateform()" name="myform">
    <h1> Login </h1>
        <label for="">User Name</label><br>
        <input type="text" placeholder="Enter User Name" name="name" id="name"><br>
        <label for="">Password</label><br>
        <input type="password"  name="password" id="password" placeholder="Enter Password"><br>
        <input type="submit" value="Login" name="submit" class="btn"><br>
        <h3>if  You   Don't  Have  an  account  ?<a href="reg.php"> Sign Up </a> now</h3>
        <h2 id="error" style="text-align:center;margin-top:30px;color:red"></h2>

        <?php
        if(isset($_GET['error'])){
           if($_GET['error']=="invalid"){
                echo '<h2 class="error">Invalid user Name Or Password</h2>';
            }if($_GET['error']=="ok"){
                echo '<h2 class="error">Deta send Sucessfully</h2>';
            }
           
        }
    ?>
    </form>
  
    </div>
   
<script>
    function validateform(){
        let error=document.getElementById('error');

        if(document.myform.name.value==""){
            error.innerText="userName Feild is Empty"
            document.myform.name.focus();
            return false;
            }
        if(document.myform.password.value==""){
            error.innerText="password Feild is Empty"
            document.myform.password.focus();
            return false;
            }

        }
          
        
</script>

</body>
</html>