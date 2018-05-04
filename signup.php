<?php 
    include 'errorMsg.php';

    session_start();
    
    if(isset($_POST['signUp'])){

        $first = $_POST['first'];
        $username = $_POST['username'];
        $last = $_POST['last'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $position = $_POST['position'];
    
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "password";
        $db = "phpsiteusers";
        
       
        

        
        $conn = new mysqli($servername, $dbusername, $dbpassword, $db);
        if (!$conn) { //validate db connection
            die("Connection failed: " . mysqli_connect_error());
        }
        //check if username already exists
        //carry out mysql insert to add new user
        $sql = "INSERT INTO users (firstname, lastname, position, pass, username) values ('$first', '$last', '$position', '$password', '$username')";
        if (mysqli_query($conn, $sql)) {

            header("Location: success.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
       
    }




?>


<html>

<head>
    <title>Sign Up</title>
    <link type="text/css" rel="stylesheet" href="CSS/signUp.css">
</head>

<body>
    <div id="signUpBox">
        <h1 style="font-family: Tahoma;">Sign Up</h1>
        <form method="post" enctype="multipart/form-data">

            <input class="input" placeholder="*Username" name="username" type="text" autofocus required>
            
            <input class="input" placeholder="*First Name" name="first" type="text" autofocus required>
            
            <input class="input" placeholder="*Last Name" name="last" type="text" autofocus required>

            <input id="pass" class="input" placeholder="*Password" name="password" type="password" autofocus required>
            
            <input id="conPass" class="input" placeholder="*Confirm Password" name="password2" type="password" onkeyup="confirm()" autofocus required>
            <p id="passMsg" style="display:none; color:red;">*passwords do not match</p>
            <script>
            function confirm(){
                if(document.getElementById("pass").value != document.getElementById("conPass").value){
                    document.getElementById("passMsg").style.display = "block";
                }else{
                    document.getElementById("passMsg").style.display = "none";  
                }
            }
            </script>
            
            <select class="input" value="" name="position" required>
                <option value="">*Select Position</option>
                <option value="user">User</option>
                <option value="manager">Manageer</option>
            
            </select>

            <input class="input" id="button" name="signUp" type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>