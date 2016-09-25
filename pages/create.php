<html>

<link rel="stylesheet" type="text/css" href="/css/codeapp.css" media="screen" />
<div>
  <h2>Create item</h2>

  <form action="create2.php" method="post">
  <div class="input-list style-1 clearfix">

      <input type="text" placeholder="New item" name="name">
      <input id="testid" class="narrowbox" type="text" placeholder="pts" name="points">
      <input type="checkbox" placeholder="repeat">
      <input class="narrowbox" type="text" placeholder="max rpt">
      <input class="submit" type="submit" placeholder="submit">
  </div>
</form>


<?php
/*
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

*/
?>
 

</div>



</html>