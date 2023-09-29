<html>
<head>
  <title>Car Search Results</title>
</head>
<body>
<h1>Car Search Results</h1>
<?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  @ $db = new mysqli('localhost', 'root', '', 'myuser');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of books found: ".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Title: ";
     echo htmlspecialchars(stripslashes($row['title']));
     echo "</strong><br />Author: ";
     echo stripslashes($row['author']);
     echo "<br />ISBN: ";
     echo stripslashes($row['isbn']);
     echo "<br />Price: ";
     echo stripslashes($row['price']);
     echo "</p>";  
  }

  $result->free();
  $db->close();

?>
</body>
</html>
