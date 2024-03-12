<!DOCTYPE html>
<html>
<body>

<?php  
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?>  
<?php 
$x = 5;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 10);
?>

<?php  
for ($x = 10; $x <= 15; $x++) {
  echo "The number is: $x <br>";
}
?>  
<?php 
 
$colors = array("ramesh", "suresh", "rahul", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  
<?php
echo'<br>';
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
?>

</body>
</html>