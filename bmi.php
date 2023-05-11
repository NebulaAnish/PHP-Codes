

<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>BMI Calculator</h1>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['height'])){
        echo "Enter Height";
    }
    elseif (empty($_POST['weight'])){
        echo "Enter Weight";
    }
    else {    
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    }
    // Calculate BMI
    $bmi = $weight / (($height/100) ** 2);

    // Determine BMI category
    if ($bmi < 18.5) {
        $category = 'Underweight';
    } elseif ($bmi < 25) {
        $category = 'Normal weight';
    } elseif ($bmi < 30) {
        $category = 'Overweight';
    } else {
        $category = 'Obese';
    }
}
?>
    <form method="post">
        <label>Height (in cm): <input type="text" name="height"></label>
        <label>Weight (in kg): <input type="text" name="weight"></label>
        <input type="submit" value="Calculate BMI">
    </form>


    <?php if (isset($bmi)):  // check if $bmi is NULL or not
        echo "<br>";  
        echo "Your BMI is: ". round($bmi, 1);
        echo "<br>";
        echo  "You are: ". $category;
    endif ?>
</body>
</html>
