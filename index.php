<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Excersises</title>
</head>
<body>
    <h1>PHP Excersises</h1>
    <?php
    echo "BRUH";
    ?> 
    <h1>EX 5</h1>
    <?php  
$x=1;
  
while($x <= 6) {
    echo "abc ";
    $x++;
}

echo "<br>";

for ($x = 1; $x <=9; $x++) {
  echo "xyz ";
}
  
echo "<br>";
  
for ($x = 1; $x <=9; $x++) {
  echo "$x ";
}

echo "<br>";
  
for ($a = 1; $a <=6; $a++) {
  echo "$a. ";
  echo "Item <br>"; 
}
?> 

<h1>EX 6</h1>

<?php
for ($x = 1; $x <=12; $x++) {
    $a=$x*$x;
  	echo "$x * $x = $a<br>";
}
?>

</body>
</html>