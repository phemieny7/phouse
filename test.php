<?php 
  
// Declare a json string 
$json = '{"g":7, "e":5, "e":5, "k":11, "s":19}'; 
  
// Use json_decode() function to 
// decode a string 
$decode = json_decode($json); 
  
echo $decode->g;
  
?> 