<!DOCTYPE html>
<html>
<head>
<title>The Library Journal Archive</title>
<link rel = "stylesheet"
   type = "text/css"
   href = "ljarchive.css" />
</head>
<body>

<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['book_id'])) {
	$book_id = sanitizeMySQL($conn, $_GET['book_id']);
	$query = "SELECT * FROM book NATURAL JOIN review WHERE book_id=".$book_id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid title.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "Looks like I didn't review $book_id<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
			echo $row["title"]." <br><br> ".$row["review_text"]." <br><br> ".$row["verdict_text"];		
		}
	}
	echo "<br><br> <a href=\"archive-index.php\">Return to homepage</a>";
} 

function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}
?>

<div class="home_4" id="h4">
<h4>Copyright <?php echo date("Y") ?></h4>
</div>
</body>
</html>