<?php
$servername="localhost";
$username="root";
$password="";
$dbname="techhub";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
}
else
echo "Failed to connect".mysqli_connect_error();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <style>
        .containerbox{
            height:300px;
            width:300px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border: 3px solid black;
    padding:5px;
    
    }
    #signinbtn{
        width:100px;
        height:20px;
        background-color: red;
        border-radius:5px;
        color:white;
    }
    #signinhead{
        display:flex;
        justify-content: center;
    }
        
    </style>
</head>
<body><div class="header">
    <div class="container">
    <div class="navbar">
        <div style="color:white;"class="logo">
            Tech Hub
        </div>
        <nav>
            <ul>
                <li>Home</li>
                <li>Products</li>
                <li>About Us</li>
                <li>Contact</li>
                <li>Account</li>
            </ul>
        </nav>
    </div>
</div>
</div><form action="admin.php" method="POST">
    <div class="containerbox">
        
        <div id="signinhead"><h2><b>ADMIN LOGIN</b></h2></div>
        <div>Username</div>
        <div><input type="text" name="email-signin" id="email-signin" placeholder="username"></div>
        <br>
        <div>Password</div>
        <div><input type="password" name="pass-signin" id="pass-signin" placeholder="Password"></div>
        <br>
    
        <button id="signinbtn" name="signinbtn">Sign-In</button>
        <br>
    </div>
</form>
</body>
</html>
<?php
if(isset($_POST['signinbtn'])){
$uname=$_POST['email-signin'];
$pass=$_POST['pass-signin'];
if($password=='admin' && $uname=='admin'){
    header('location: admin.php');
}
}

mysqli_close($conn);
?>