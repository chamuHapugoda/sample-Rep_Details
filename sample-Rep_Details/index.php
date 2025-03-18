<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background:url(image/R.jpeg); 

        }

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 100px 50px;
            padding: 100px 50px;
        }

        .container .card {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 350px;
            height: 300px;
            background-color: rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: 0 35px 88px rgba(0, 0, 0, 0.15);
        }
        h1{
            color: #0ecce5;
        }

        .container .card:hover {
            height: 400px;
        }

        .container .card .imgbx {
            position: absolute;
            top: 20px;
            width: 300px;
            height: 200px;
            background: #333;
            border-radius: 12px;
            transition: 0.5s;
        }

        .container .card:hover .imgbx {
            top: -100px;
            scale: 0.75;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);  
        }

        .container .card .imgbx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 12px;
        }
        .container .card .content{
            position: absolute;
            top: 250px;
            width: 100%;
            overflow: hidden;
            padding: 0 30px;
            height:40px ;
            text-align: center;
            
            transition: 0.5s;

        }
        .container .card:hover .content {
            top: 130px;
            height: 250px;
        }
        .btn{
        width: 200px;
        height: 50px;
        margin-left: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        background: linear-gradient(to right, #0ecce5 0%, #090042 100%); 
        border: none;
        font-size: 20px;
        color: white;
        border-radius: 5px;
        transition-duration: .3s;
        }
    </style>
</head>

<body>
    <div class="container">
       
        <div class="card" style="--clr:#ff3e7f;">
            <div class="imgbx">
                <img src="image/OIP.jpeg" alt="">
            </div>
            <div class="content">
                <h1>ABC Campany</h1>
                <a href="log.php"><button class="btn">Login</button></a>
                <a href="reg.php"><button class="btn">Register</button></a>
            </div>
        </div>
       
    </div>
    
</body>
</html>