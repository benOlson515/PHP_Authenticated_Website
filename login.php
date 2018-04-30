<?php
    session_start();

    $accessname = "accessname";
    $accesspassword = "password";

    

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        


        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "password";
        $db = "phpsiteusers";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $db);
        
        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";

        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        $userPass = $row['pass'];
        
        if($password == $userPass){
            $_SESSION["status"] = "loggedin";

            header("Location: index.php");
        }
        else{
            echo "<script>alert('Invalid Login')</script>";
        }

        
    }
    
?>


<html>
<head>
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="CSS/mainStyle.css">
</head>
<body>
    <div id="loginBox">
        <h1 style="font-family: Tahoma;">Login</h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            
            <input class="input" placeholder="Username" name="username" type="text" autofocus>
            
            <input class="input" placeholder="Password" name="password" type="password" autofocus>
            
            <input id="button" name="login" type="submit" value="Login">
        </form>
        
        <h3 style="width:100%; text-align:center;">New user? <a href="signup.php">Sign Up</a></h3>
        
    </div>
</body>
</html>