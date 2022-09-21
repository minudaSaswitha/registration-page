<?php

//fetch.php;

$data = array();

if(isset($_GET["query"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=reg_form1", "root", "");

 $query = "
 SELECT schoolName FROM schools
 WHERE schoolName LIKE '".$_GET["query"]."%' 
 ORDER BY schoolName 
 LIMIT 20
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row["schoolName"];
 }
}

echo json_encode($data);

?>