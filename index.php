<?php
    session_start();

    if(!isset($_SESSION["usercode"])){
        header("Location: login.php");
    }

    session_destroy();
?>

<html>
<head>
    <title>Private Page</title>
</head>
<body>
    <h1 style="font-family: Tahoma;">You made it to the private page!</h1>
    
</body>
</html>