<?php
    session_start();

    $accessname = "accessname";
    $accesspassword = "password";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        

        if($username == $accessname && $password == $accesspassword){
            $_SESSION["usercode"] = $usercode;

            header("Location: index.php");
        }
        else{
            echo "<script>alert('Invalid Login')</script>";
        }
    }
?>


<html>
<head>
    <title>Access</title>
    <link type="text/css" rel="stylesheet" href="CSS/mainStyle.css">
</head>
<body>
    <div id="loginBox">
        <h1 style="font-family: Tahoma;">Login</h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            
            <input class="input" placeholder="Username" name="username" type="text" autofocus>
            
            <input class="input" placeholder="Password" name="password" type="text" autofocus>
            
            <input id="button" name="login" type="submit" value="Login">
        </form>
    </div>
</body>
</html>