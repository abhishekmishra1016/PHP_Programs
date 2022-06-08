<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Transformation</title>
</head>
<body>

    <form method="post">
        <p>Enter your string</p>
        <br>
        <input type="text" name="string" id="string">
        <button type="submit" name="AllUpper">All Upper</button>
        <button type="submit" name="AllLower">All Lower</button>
        <button type="submit" name="FirstUpper">First Upper</button>
        <button type="submit" name="AllFirstUpper">All First Upper</button>
    </form>

    <?php
        $string = $_POST['string'];
        if(isset($_POST['AllUpper'])){
            echo strtoupper($string);
        }
        elseif(isset($_POST['AllLower'])){
            echo strtolower($string);
        }
        elseif(isset($_POST['FirstUpper'])){
            echo ucfirst($string);
        }
        elseif(isset($_POST['AllFirstUpper'])){
            echo ucwords($string);
        }
    ?>
    
</body>
</html>