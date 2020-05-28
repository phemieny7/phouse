 <?php
$cars = [1,2,3,4,5,6];

$trial = array_push($cars, "Bently", "ferarri");
$arrlength = count($cars);



for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo $cars[0];
?>