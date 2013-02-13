<?php //index
require_once 'db_connect.php';

$query = "SELECT * FROM port";
$title_query = "SELECT title FROM port";
$result = mysql_query($query);
$title = mysql_query($title_query);
if (!result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);


?>

<!DOCTYPE HTML>
<html>
<head>
	<title="Page Title">
</head>
<body style="width:800px; margin:auto;">

<h1 style="text-align:center;">Portfolio Entry</h1>
	<div style="float:right; clear:left;"
			<?php for ($i=0;$i<$rows; $i++){ ?>
			<br>
			<h2>
			<?php print mysql_result($result, $i, 'title');	?>
			</h2
			<br>
			
			<img src="
				<?php if (mysql_result($result, $i, 'imgUrl')) 
				{ 
					print mysql_result($result, $i, 'imgUrl'); 
				} 
				?>" 
			width="100" height"100"/>

			<br>
			<?php if (mysql_result($result, $i, 'vidUrl')){ ?>
			<video src="<?php print mysql_result($result, $i, 'vidUrl'); echo 'vidUrl'; ?> ">
			 </video>
			<?php } ?> 
			<br>
			<p style="width:300px;">
			<?php if (mysql_result($result, $i, 'bodyCont')){
				print mysql_result($result, $i, 'bodyCont');

			} ?>
		</p>
			<br>
		</div>
		<?php } ?>
		<div style="margin-left:375px;">
		<a href="enter.php">Create New Entry</a></div>
</body>
</html>