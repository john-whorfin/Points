<html>

<link rel="stylesheet" type="text/css" href="/css/codeapp.css" media="screen" />
<div>
  <h2>Create item</h2>
  <div class="input-list style-1 clearfix">

      <input type="text" placeholder="New item">
       <input id="testid" class="narrowbox" type="text" placeholder="pts">
        <input type="checkbox" placeholder="repeat">
               <input class="narrowbox" type="text" placeholder="max rpt">
       <input class="submit" type="submit" placeholder="submit">
  </div>

<?php

include 'dbconnect.php';

// mysqli

$query = "SELECT name FROM tasks";
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
     printf ("%s\n", $row["name"]);
    }

    /* free result set */
    $result->free();
} else {

echo "fuck";
}


?>


</div>



</html>