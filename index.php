<?php
 	require '--temp/php/app.php';
 	$dirs = getAll("./");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Localhost Projects</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="--temp/css/style.css">
	<script type="text/javascript" src="--temp/js/app.js" ></script>
</head>
<body>

<div id="title">Localhost Projects</div>
<div id="container">
	<div class="form">
		<input type="text" name="port" placeholder="port'a yürü" id="port"><button>GO!</button>
	</div>

	<ul>
	<li><a href="phpmyadmin">Phpmyadmin</a></li>
<?php
foreach ($dirs as $var) {
	echo "\t<li>";
	echo "<a href='$var'>".editName($var)."</a>";
	echo "</li>\n";
}
?>
	</ul>
</div>


</body>
</html>