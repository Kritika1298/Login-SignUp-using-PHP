<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysqli_connect($host,$user,$password);
mysqli_select_db($db);

if(isset($_POST['username'])){
$uname=$_POST['username'];
$password=$_POST['password'];
$sql="select * from loginform where user='".$uname."'AND Pass='".$password."'
    limit 1";
    $result=mysqli_query($sql);
    if(mysqli_num_rows($result)==1){
        echo "You Have successfully logged in";
        exit();
        
    }
    else {
        echo "you have entered incorrect password";
        exit();
        
    }
    
}
?>











<!Doctype html>


<html>
<head>
<title>pilot Login/Signup </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"  href="introjs.css">
    <body>
        
        <div class="loginbox">
            <img src="sampleD.png" class="avatar">
            <h1 > Login Here</h1>
            
            <form method="POST" action="#">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" >
            <input type="submit" name="" value="Login">
            <a href="#">Lost Your Password?</a><br>
                <a href="dex.html">Dont Have an Account?</a></form>
        </div>
    
    
    
    
    </body>
</head>
</html>
