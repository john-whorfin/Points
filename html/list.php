<html>

<link rel="stylesheet" type="text/css" href="/css/codeapp.css" media="screen" />
<div>
  <h2>List items</h2>
</div>

<?php echo "before"; ?>
<table>

<?php


include 'dbconnect.php';

// mysqli

$query = "SELECT name, points FROM tasks";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
     	echo "<tr>";
      printf ("<td>%s</td><td>%s</td>", $row["name"], $row["points"]);
      echo "</tr>";
    }

    /* free result set */
    $result->free();
} else {

echo "fuck";
}



?>

</table>

<?php echo "after"; ?>


</html>