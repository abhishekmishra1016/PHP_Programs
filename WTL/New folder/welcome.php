<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <?php

        $conn = new mysqli("localhost", "root", "", "AbhishekRasal");

        if($conn == false){
            die('ERROR: COULD NOT CONNECT' . $conn->connect_error);
        }
        else {
            $val = "Connection Established";
            echo strtolower("Connection established");

            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                $user_id = "mit123";
                $user_name = $_REQUEST['user_name'];
                $user_email = $_REQUEST['user_email'];
                $user_phone = $_REQUEST['user_phone'];

                $sql = "INSERT INTO user_info (user_id, user_name, user_email, user_phone) VALUES ('$user_id', '$user_name', '$user_email', '$user_phone')";

                if($conn->query($sql)){
                    echo "<h2> Data has been uploaded </h2>";
                    echo "<h2>Hi, $user_name!</h2>";
                }
                else {
                    echo "Something went wrong".$conn->error($conn);
                }

                $result = $conn->query("SELECT * FROM user_info WHERE user_id='mit123'");

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "id: " . $row["user_id"]. " - Name: " . $row["user_name"]. " " . $row["user_email"]. " " . $row["user_phone"]. "<br>";
                    }
                  } else {
                    echo "0 results";
                  }
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>