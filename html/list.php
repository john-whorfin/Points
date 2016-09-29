<html>

<link rel="stylesheet" type="text/css" href="/css/codeapp.css" media="screen" />
<div>
  <h2>List items</h2>
  <div class="input-list style-1 clearfix">

  </div>

<?php

include 'dbconnect.php';

// mysqli

$query = "SELECT name, points FROM tasks";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
     printf ("%s %s<br>", $row["name"], $row["points"]);
    }

    /* free result set */
    $result->free();
} else {

echo "fuck";
}

// foo



?>


</div>



</html>