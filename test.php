<?php
$json = '[{\"f1\":\"Spacious\",\"f2\":\"Exclusive\",\"f3\":\"Garage\",\"f4\":\"Beautifull\"}]';

// Decode JSON data to PHP object
$obj = json_decode($json);
// Access values from the returned object
echo $obj[0]->[f1];   // Output: 65
 ?>
