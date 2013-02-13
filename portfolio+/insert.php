<?php //insert.php
require_once 'db_connect.php';

//get url variables
$title = $_GET['title'];
$imgUrl = $_GET['imgUrl'];
$vidUrl = $_GET['vidUrl'];
$bodyCont = $_GET['bodyCont'];



if (!$title or !$imgUrl or !$vidUrl or !$bodyCont) {
	// not all information is present redirect to form
	// we will talk about this in class you can do one or the other here if you have a better solution than do it
	echo "Did not get all the information requested.";
	// header( 'Location: enter.php');
}
else {

	// insert into database
	$query = "INSERT INTO port (title, imgUrl, vidUrl, bodyCont) VALUES ('$title', '$imgUrl', 'vidUrl', '$bodyCont')";

	echo $query; // for testing your query

	// run query
	$result = mysql_query($query);

	// check for errors
	if (!$result) {
		echo "fudge....";
		die ("Database access failed: " . mysql_error());

	}
	else {
		// redirect to list
		header( 'Location: index.php');
		echo "1 record added";
	}
}


?>