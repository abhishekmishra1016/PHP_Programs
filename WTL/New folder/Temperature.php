<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Convertor</title>
</head>
<body>

    <h1>Fahrenhite to Celsius</h1><br>
    <form action="" method="POST">
        <input type="number" name="df" placeholder="Enter temperature in Degree Fahrenheit"><br>
        <button type="submit" name="toCel">Convert</button>
    </form>
    <br>
    <h4 id="ansToCel"></h4>
    <hr>

    

    <h1>Celsius to Fahrenheit</h1><br>
    <form action="" method="POST">
        <input type="number" name="dc" placeholder="Enter temperature in Degree Celsius"><br>
        <button type="submit" name="toFah">Convert</button>
    </form>
    <br>
    <h4 id="ansToFah"></h4>

    <?php
        if(isset($_POST['toCel'])){
            $df = $_POST['df'];
            $ansToCel = ($df - 32) * 5/9;
            echo "<script type='text/JavaScript'> document.getElementById('ansToCel').innerText =  '$ansToCel' </script>";
            
        }

        if(isset($_POST['toFah'])){
            $df = $_POST['dc'];
            $ansToFah = ($df * 9/5) + 32;
            echo "<script type='text/JavaScript'> document.getElementById('ansToFah').innerText =  '$ansToFah' </script>";
            
        }
    ?>
    
</body>
</html>