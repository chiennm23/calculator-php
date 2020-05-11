<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 600px;
            height: 180px;
        }

        label {
            width: 150px;
            float: left;
        }

        input select {
            width: 200px;
            margin-bottom: 3px;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>
        <legned><h2>Calculator</h2></legned>
        <div>
            <label>First operand</label>
            <input type="text" name="first_operand">
            <br>
            <label>Operator</label>
            <select name="calculator">
                <option></option>
                <option>Sum</option>
                <option>Sub</option>
                <option>Multi</option>
                <option>Div</option>
            </select>
            <br>
            <label>Second operand</label>
            <input type="text" name="second_operand">
            <br>
            <button type="submit" name="submit">Submit</button>
        </div>
    </fieldset>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_operand = $_POST['first_operand'];
    $calculator = $_POST['calculator'];
    $second_operand = $_POST['second_operand'];
    if ($calculator == 'Sum') {
        echo $first_operand . " + " . $second_operand . " = " . ($first_operand + $second_operand);
    }
    if ($calculator == 'Sub') {
        echo $first_operand . " - " . $second_operand . " = " . ($first_operand - $second_operand);
    }
    if ($calculator == 'Multi') {
        echo $first_operand . " x " . $second_operand . " = " . ($first_operand * $second_operand);
    }
    if ($calculator == 'Div') {
        if($second_operand == 0){
            echo "ERROR";
        }else {
            echo $first_operand . " / " . $second_operand . " = " . ($first_operand / $second_operand);
        }
    }
    if ($first_operand == "" && $second_operand == "" && $calculator=="") {
        echo "<span>Hay nhap phep tinh!</span>";
    }
}
?>
</body>
</html>
