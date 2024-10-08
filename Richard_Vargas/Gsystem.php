<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link rel="stylesheet" href="Gsystem.css">
</head>
<body>
    
<h1 class="title"> Grading System</h1>
<form action="Gsystemm.php" method="get">
<div class="name">
    <label for=""> <br> Student Name: <br>
    </label>
<input type="text" name="name">
<br> <br>

<label for=""> <br> Prelim: <br>
    </label>
<input type="text" name="pre">
<br> <br>

<label for=""> <br> MidTerm: <br>
    </label>
<input type="text" name="mid">
<br> <br>

<label for=""> <br> Finals: <br>
    </label>
<input type="text" name="finals">
<br> <br>
</div>
<br> <br> 

<input class="Compute" type="submit" value="COMPUTE" style="padding:15px;  margin-bottom: 5px;">

</form>
<a href="index.php"><button  class="return">Return</button></a>
</body>
</html>