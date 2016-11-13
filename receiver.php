<?php
$var1 = $_POST['name'];

echo "you sent me $var1";

$myfile = fopen("logs.txt", "wr") or die("Unable to open file!");
$txt = "$var1";
fwrite($myfile, $txt);
fclose($myfile);


?>