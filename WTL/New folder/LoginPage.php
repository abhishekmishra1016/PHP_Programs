<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | The Coffee Shop</title>

    <style>
        body {
            background-color: brown;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0px;
        }

        #shop-name {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: wheat;
            letter-spacing: 10px;
            text-align: center;
        }

        header {
            text-align: center;
            color: white;
        }

        .loginbox {
            width: 60%;
            margin: auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: aliceblue;
            text-align: center;
        }

        .myButton {
            padding: 10px 30px;
            border: none;
            background-color:coral;
            color: white;
        }

        .menu {
            width: 100%;
            height: 50px;
            background-color: #333;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            float: left;
        }

        .menu a:hover {
            background-color: gray;
        }

        .menu a.active {
            background-color: bisque;
            color: black;
        }
    </style>

</head>
<body>

    <header>
        <h1 id="shop-name">The Coffee Shop</h1>
        <p>The Authentic Coffee!</p>

        <div class="menu">
            <a href="#">Login</a>
            <a href="#">Shop</a>
            <a class="active" href="#">Admin Panel</a>
        </div>
    </header>

    

    <div class="loginbox">
        <h2>Admin Login</h2>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter your username">

            <br><br>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password">

            <br><br>

            <button class="myButton" name="submit" type="submit">Login</button>
        </form>
    </div>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'abhishekrasal');

        if(!$mysqli->connect_error){
            if(isset($_POST['submit'])){
            
                $uname = $_POST['username'];
                $password = $_POST['password'];
    
                $sql = "SELECT * FROM login WHERE username='$uname' and password='$password'";
                    $result = $mysqli->query($sql);
                    $rows = $result->fetch_assoc();
                    if($result -> num_rows == 1){
                        echo "Login Successful";
                    }
                    else {
                        echo "Check your uname & pswd";
                    }
    
            }
        }
        else {
            die ('Connection failed' .$mysqli->connect_error);
        }

        
    ?>

</body>
</html>