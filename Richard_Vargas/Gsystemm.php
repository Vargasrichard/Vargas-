
<?php

$stud_name = $_GET['name'];
$prelim = $_GET['pre'];
$midterm = $_GET['mid'];
$finals = $_GET['finals'];

$grade = ($prelim * 0.30) + ($midterm * 0.30) + ($finals * 0.40);


echo "---------------------------------------------------------";
echo"-------------------GRADING SYSTEM---------------------------------------------------------";
echo "  <br> <br> -------------------------------------------------------------------------<b> Student Name: </b> [<b> $stud_name</b>] -----------------------------------------------------<br> <br>";
echo " <b> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Prelim: </b> [<b> $prelim</b>] <br> <br>";
echo " <b> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Midterm: </b> [<b> $midterm</b>] <br> <br>";
echo " <b> ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Finals: </b> [<b> $finals</b>] <br> <br>";
if($grade <= 70)
{
    echo"<br> -------<b>[5.00 Failed]</b>-------<br> <br>";
}
else if($grade <= 74)
{
    echo"<br>-------<b>[4.00 Conditional]</b>------- <br> <br>";
 } 


else if($grade <= 77)
{
    echo"<br>-------<b>[3.00 Passed]</b>------- <br> <br>";
}
else if($grade <= 79)
{
    echo"<br>-------<b>[2.75 Fair]</b>------- <br> <br>";
}
else if($grade <= 82)
{
    echo"<br>-------<b>[2.50 Fair]</b>------- <br> <br>";
}
else if($grade <= 84)
{
    echo"<br>-------<b>[2.25 Nice]</b>------- <br> <br>";
}
else if($grade <= 87)
{
    echo"<br>-------<b>2.00 Good]</b>------- <br> <br>";
}
else if($grade <= 90)
{
    echo"<br>-------<b>[1.75 Very Good]</b>------- <br> <br>";
}
else if($grade <= 93)
{
    echo"<br>-------<b>[1.50 Very Good]</b>------- <br> <br>";
}
else
{
    echo"<br>-------<b>[1.00 Excellent]</b>------- <br> <br>";
}
echo"<br>-------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
?>
</div>
<a href="Gsystem.php"><button>Return</button></a>