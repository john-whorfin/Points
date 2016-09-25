<?php

include 'dbconnect.php';

// mysqli

$result = $mysqli->query("SELECT * FROM tasks");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
?>



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
	echo "thing";
?>


</div>



</html>