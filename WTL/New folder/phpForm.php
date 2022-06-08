<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <h1>PHP Form</h1>
    
    <form action="welcome.php" method="post">
        <p>Enter your Name</p>
        <input type="text" id="user_name" name="user_name">
        <br><br>

        <p>Enter your Email</p>
        <input type="text" id="user_id" name="user_email">
        <br><br>

        <p>Enter your Phone Number</p>
        <input type="text" id="user_phone" name="user_phone">
        <br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
