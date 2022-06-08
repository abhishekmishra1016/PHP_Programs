<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of Week</title>
</head>
<body>

    <p>Enter a number between 1 to 7</p>
    <form method="POST">
        <input type="number" name="num" id="num" min="1" max="7">
        <button type="submit" name="getday">Get Day</button>
    </form>
    
    <?php
        if(isset($_POST['getday'])){
            
            $num = $_POST['num'];

            switch($num){
                case 1:
                    echo "<p>Monday</p>";
                    break;
                case 2:
                    echo "<p>Tuesday</p>";
                    break;
                case 3:
                    echo "<p>Wednesday</p>";
                    break;
                case 4:
                    echo "<p>Thursday</p>";
                    break;
                case 5:
                    echo "<p>Friday</p>";
                    break;
                case 6:
                    echo "<p>Saturday</p>";
                    break;
                case 7:
                    echo "<p>Sunday</p>";
                    break;
                default:
                    echo "Please enter a valid number";

                    
            }
        }
    ?>

</body>
</html>