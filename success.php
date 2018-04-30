<html>
<head>
    <title>Private Page</title>
    <style>
        html{
            background-image: url(Images/green_grassland-wide.jpg);
            background-position: center;
        }
        div{
            width: 400px;
            padding: 20px;
            position: fixed;
            left: 50%;
            margin-left: -220px;
            top: 25%;
            background-color: whitesmoke;
        }
        #button{
            background-color: darkcyan;
            cursor: pointer;
            width: 80px;
            position: relative;
            left: 50%;
            padding: 10px;
            margin-left: -50px;
            font-size: 20px;
        }
        div p{
            font-size: 20px;
            text-align: center;
            width: 100%;
        }
    
    </style>
</head>
<body>
    <div>
        <p>You have been successfully signed up, please login again.</p>
        <form action="login.php">
            <input id="button" type="submit" value="Login">
        </form>
        
    </div>
    
</body>
</html>