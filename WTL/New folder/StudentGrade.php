<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade</title>
</head>
<body>
    <p>Enter your marks (out of 100)</p>
    <form action="" method="POST">
        <input type="number" name="marks" id="marks" placeholder="Marks" min="0" max="100">
        <button type="submit" name="checkGrade">Check Grade</button>
    </form>

    <?php
        if(isset($_POST['checkGrade'])){
            $markss = $_POST['marks'];

            if($markss >= 60){
                echo "<h4>Grade: First Division</h4>";
            }
            elseif($markss >= 45 && $markss <= 59){
                echo "<h4>Grade: Second Division</h4>";
            }
            elseif($markss >= 33 && $markss <= 44){
                echo "<h4>Grade: Third Division</h4>";
            }
            else{
                echo "<h4>Grade: Fail</h4>";
            }
        }
    ?>
    
</body>
</html>