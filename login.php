<?php
    session_start();

    $accesscode = "accesscode";

    if(isset($_POST['login'])){
        $usercode = $_POST['usercode'];

       

        

        if($usercode == $accesscode){
            $_SESSION["usercode"] = $usercode;

            header("Location: index.php");
        }
        else{
            echo "<script>alert('Invalid Code Entered')</script>";
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
        <h1 style="font-family: Tahoma;">Enter Access Code</h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            <input id="code" placeholder="Access Code" name="usercode" type="text" autofocus>
            
            <input id="button" name="login" type="submit" value="Go!">
        </form>
    </div>
</body>
</html>