<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp!</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username here">
        <br>
        <input type="password" name="password" placeholder="Password here">
        <br>
        <button type="submit" name="updateData"> Update Data </button>
    </form>

    <hr>

    <h1>Reset Account</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username here">
        <br>
        <input type="password" name="passwordold" placeholder="OLD Password here">
        <br>
        <input type="password" name="passwordnew" placeholder="NEW Password here">
        <br>
        <button type="submit" name="updatePassword"> Update Password </button>
    </form>
    
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'temp');

        if(isset($_POST['updateData'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!$mysqli){
                echo "Something went wrong while connecting to server";
            }
            else{
                $createQuery = "INSERT INTO user_details (username, password) VALUES ('$username', '$password')";

                if($mysqli->query($createQuery)){
                    echo "Your account was created successfully!";
                }
                else {
                    echo "Something went wrong!";
                }
            }
        }

        if(isset($_POST['updatePassword'])){
            $username = $_POST['username'];
            $oldpassword = $_POST['passwordold'];
            $newpassword = $_POST['passwordnew'];

            if(!$mysqli){
                echo "Something went wrong while connecting to server";
            }
            else{
                $createQuery = "UPDATE user_details SET password = '$newpassword' WHERE username = '$username' AND password = '$oldpassword'";
                $check = $mysqli->query($createQuery);
                if($check != null){
                    echo "$username , your password was updated to $newpassword";
                }
                else {
                    echo "Something went wrong!";
                }
            }
        }
    ?>
</body>
</html>