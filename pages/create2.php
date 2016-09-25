

<?php

$name = mysqli_real_escape_string($link, $_POST['name']);
$points = mysqli_real_escape_string($link, $_POST['points']);

include 'dbconnect.php';

// mysqli

$query = "INSERT INTO tasks (name,points) VALUES('$name','$points')";


if ($result = $mysqli->query($query)) {
 echo "success";

} else {

echo "fuck";
}


?>
 
