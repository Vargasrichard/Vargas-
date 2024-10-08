<?php 

$result = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1']: 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2']: 0;
    $operation = $_POST['operation'];

    switch($operation){
 
     case 'add';
     $result = $num1 + $num2;
     break;

     case 'subtract';
     $result = $num1 - $num2;
     break;
     
     case 'multiply';
     $result = $num1 * $num2;
     break;

     case 'divide';
     $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by Zero";
     break;

    default:
    $result = "invalid operation";
    break;

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="code.css">
</head>
<body>
    <h1 class="title">Calculator</h1>
    <form method="POST" action="">
<div class="contain">
    <div class="num1">
        <label for="num1" class="num1">Number 1:</label>
        <input type="number" step="any" name="num1" id="num2" class="boxx"> <br>
    </div>

<div class="num2">
    <label for="num2" class="num2">Number 2:</label>
    <input type="number" step="any" name="num2" id="num2" class="box"> <br>
</div>

<div class="select">

<label for="operation " class="ope" >Select Operation</label>
<select name="operation" id="operation" class="boxxx">

<option value="add">add</option>
<option value="subtract">subtract</option>
<option value="multiply">multiply</option>
<option value="divide">divide</option>

</select> <br>

</div>
<button type="sumbit" class="cal" >Calculate</button>
</div>

    </form>

<h3 class="result" >RESULT: <?php echo $result ?>
</h3>

<a href="index.php" class="buttonn"> Return to home</a>

</body>
</html>