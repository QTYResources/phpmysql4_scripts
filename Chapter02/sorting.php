<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Sorting Arrays</title>
	<style type="text/css">
		.table {
			border: 0px;
			display: flex;
			justify-content: center;
		}
	</style>
</head>
<body>
<table class="table" cellspacing="3" cellpadding="3">
	<tr>
		<td><h2>Rating</h2></td>
		<td><h2>Title</h2></td>
	</tr>
<?php # Script 2.8 - sorting.php

// Create the array:
$movies = array (
'Casablanca' => 10,
'To Kill a Mockingbird' => 10,
'The English Patient' => 2,
'Stranger Than Fiction' => 9,
'Story of the Weeping Camel' => 5,
'Donnie Darko' => 7
);

// Display the movies in their original order:
echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
foreach ($movies as $title => $rating) {
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}

// Display the movies sorted by title:
sort($movies);
echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
foreach ($movies as $title => $rating) {
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}

// Display the movies sorted by rating:
arsort($movies);
echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
foreach ($movies as $title => $rating) {
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}

?>
</table>
</body>
</html>