<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table</title>
</head>
<body>
    <form method="POST">
        <p>Enter a number to generate a table</p>
        <input type="number" name="numberr" id="numberr" placeholder="Enter a number">
        <button type="submit" name="genTable">Generate Table</button>
    </form>

    <?php
        if(isset($_POST['genTable'])){
            $value = $_POST['numberr'];

            for($i=1; $i<11; $i++){
                $ans = $i * $value;
                echo "<p>$value x $i = $ans</p>";

            }
        }
    ?>
</body>
</html>