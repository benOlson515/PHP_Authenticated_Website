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
            echo "incorrect code entered";
        }
    }
?>


<html>
<head>
    <title>Access</title>
</head>
<body>
    <h1 style="font-family: Tahoma;">Enter Access Code</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <input placeholder="Access Code" name="usercode" type="text" autofocus>
        
        <input name="login" type="submit" value="Go!">
    </form>
</body>
</html>