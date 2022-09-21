<?php

$name = "H.D.Minuda Saswitha";
$School = "Bandaranayake College Gampaha";
$Age = "Junior";
$result = substr($School, 0, 1);
echo $result."<br>";
$number = rand(1,99999);
$id = "Reg_".$number.$result."_".$Age[0];
echo $id;

?>