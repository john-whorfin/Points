<?php

include 'dbconnect.php';

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$points = mysqli_real_escape_string($mysqli, $_POST['points']);

echo $_POST['name'];

// mysqli

// $city = mysqli_real_escape_string($link, $city);

$query = "INSERT INTO tasks (name,points) VALUES('$name','$points')";


if ($result = $mysqli->query($query)) {
 echo "success";

} else {

echo "fuck";
}


?>
 
