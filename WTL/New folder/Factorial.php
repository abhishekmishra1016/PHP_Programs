<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Factorial</title>
</head>
<body>
    <p>Enter a number</p>
    <form method="POST">
        <input type="number" name="num" id="num">
        <button type="submit" name="factorial">Get Factorial</button>
    </form>

    <?php
        if(isset($_POST['factorial'])){
            $num = $_POST['num'];
            
            function Factorial($num){
                if($num <= 1){
                    return 1;
                }
                else {
                    return $num * Factorial($num - 1);
                }
            }

            echo "Factorial of $num is " .Factorial($num);
        }
    ?>
</body>
</html>