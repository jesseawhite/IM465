<!--<?php //enter.php
require_once 'db_connect.php';

// get the activity types
$types_query = "SELECT * FROM port";
$types_result = mysql_query($types_query);
if (!$types_result) die ("Database access failed: " . mysql_error());
$types_rows = mysql_num_rows($types_result);

// get the distance units
$units_query = "SELECT * FROM port WHERE id";
$units_result = mysql_query($units_query);
if (!$units_result) die ("Database access failed: " . mysql_error());
$units_rows = mysql_num_rows($units_result);
?>-->

<!DOCTYPE html>
<html>
<head>
<title>Enter your portfolio item.</title>
</head>

<body>
<h1>Enter your portfolio item.</h1>
<form name="port-enter" action="insert.php" method="get">

<br/>
<label>Title</label>
<input type="text" name="title">
<!--<?php
	if ($units_rows) {
		echo "<select name=\"distance_units\">";
		for($i=0; $i<$units_rows; $i++) {
			echo "<option value=\"" . mysql_result($units_result, $i, 'id') . "\">" . mysql_result($units_result, $i, 'unit') . "</option>";
		}
		echo "</select>";
	}
?>-->
<br>
<label>Image URL</label>
<input type="text" name="imgUrl">
<br>
<label>Video URL</label>
<input type="text" name="vidUrl">
<br>
<label>Body Content</label>
<textarea rows="4" cols="50" name="bodyCont"></textarea>
<br>


<button type="submit">Submit</button>
</form>
</body>
</html>