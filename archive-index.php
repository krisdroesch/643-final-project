<!DOCTYPE html>
<html>
<title>The Library Journal Archive</title>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "ljarchive.css" />
</head>
<body>


<div class="topnav" id="nav1">
  <a href="archive-about.php">About</a>
</div>

<div class="home_1" id="h1">
<h1>The <i>Library Journal</i> Archive</h1>
</div>

<div class="home_2" id="h2">
<h2>(of one little person)</h2>
</div>

<div class="search-by-title" id="h3">
<h3>Search by title...</h3>
</div>
<div class="title" id="form">
<form id="title" method="get" action="archive-review.php">
<select name="book_id">
    <option value="1">Food Whore: A Novel of Dining and Deceit</option> //make value book ID
    <option value="2">Yes, My Accent Is Real: And Some Other Things I Haven't Told You</option>
    <option value="3">Wherever There is Light</option>
    <option value="4">The Sparrow Sisters</option>
    <option value="5">In Another Life</option>
    <option value="6">Paris is Always a Good Idea</option>
    <option value="7">The Madwoman Upstairs</option>
    <option value="8">The Sky Over Lima</option>
    <option value="9">The Art and Craft of Tea</option>
    <option value="10">The Fifth Avenue Artists Society</option>
    <option value="11">Eligible</option>
    <option value="13">A Fine Imitation</option>
    <option value="14">Happy People Read and Drink Coffee</option>
    <option value="15">Lost Among the Living</option>
    <option value="16">The Winemakers</option>
    <option value="17">A Girl Like You</option>
    <option value="18">Girl in Disguise</option>
</select>
<input type="submit" name="Submit" value="Send">
</form>
</div>
<?php
?>

<div class="home_4" id="h4">
<h4>Copyright <?php echo date("Y") ?></h4>
</div>
</body>
</html>