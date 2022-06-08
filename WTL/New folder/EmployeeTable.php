<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
</head>
<body>

    <form method="post">
        <p>Employee Name</p>
        <input type="text" name="emp_name">
        <br>

        <p>Employee Department</p>
        <select name="emp_dept">
            <option value="SDE">SDE</option>
            <option value="Support">Support</option>
            <option value="Admin">Admin</option>
        </select>

        <p>Employee Salary</p>
        <input type="number" name="emp_salary">

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'abhishekrasal');

        if(isset($_POST['submit'])){

            

            if(!$mysqli){
                echo "Something went wrong" .$mysqli -> connect_error;
            }
            else {
                $emp_name = $_POST['emp_name'];
                $emp_dept = $_POST['emp_dept'];
                $emp_salary = $_POST['emp_salary'];

                $query = "INSERT INTO emp_table (emp_name, emp_dept, emp_salary) VALUES ('$emp_name', '$emp_dept', $emp_salary)";

                if($mysqli->query($query)){
                    echo "Data added successfully!";
                    setcookie('issues', 'SET');
                }
                else{
                    echo "Something went wrong while uploading";
                }
            }

        }
        if(!$mysqli){
            echo "Something went wrong" .$mysqli -> connect_error;
        }
        else {
            $queryGET = "SELECT * FROM emp_table WHERE emp_salary >=50000  ORDER BY emp_name ASC LIMIT 3";
            $data = $mysqli->query($queryGET);

            if(isset($_COOKIE['issues'])){echo "<table><tr><th>Name</th><th>Department</th><th>Salary</th></tr>";
                while($rows = $data -> fetch_assoc()){
                    echo "<tr>";
                    echo  "<td>" .$rows['emp_name'] ."</td>";
                    echo  "<td>" .$rows['emp_dept'] ."</td>";
                    echo  "<td>" .$rows['emp_salary'] ."</td>";
                    echo "</tr>";
                }}
            
            

        }
    ?>
    
</body>
</html>