<?php
?>

<!DOCTYPE HTML>

<head>
	<title>Draid</title>
	<meta charset="UTF-8">
	<meta name="description" content="Discord raid tool.">
	<meta name="author" content="Jhin Scripter">
	<link rel="icon" href="resources/icone.png">
</head>

<style>
body {
  background-image: url("resources/main_bg.gif");
  background-repeat: no-repeat;
  background-size: cover;
}
.themenubutton {
	box-shadow:inset 0px 34px 0px -15px #b54b3a;
	background-color:#a73f2d;
	border:1px solid #241d13;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	position: absolute;
	top: 10px;
	right: 10px;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #7a2a1d;
}
.themenubutton:hover {
	background-color:#b34332;
}
.themenubutton:active {
	position: absolute;
	top: 10px;
	right: 10px;
}
</style>

<script>
	function gotomenu() {
		window.location.replace("./main")
	}
</script>

<body>
	<center>
		<h1 style="color: red; font-size: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Draid<img src="resources/pageico.png"></h1>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/draid_join">&nbsp;&nbsp;&nbsp;Join✔️</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/draid_flood.php">&nbsp;&nbsp;&nbsp;Flood✔️</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/draid_leave.php">&nbsp;&nbsp;&nbsp;Leave✔️</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="#">&nbsp;&nbsp;&nbsp;Friend request❌</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/dgc.php">&nbsp;&nbsp;&nbsp;Discord gifts checker✅</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/webhook_flooder.php">&nbsp;&nbsp;&nbsp;Discord webhook flooder✅</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="./tools/draid_hypesquadadd.php">&nbsp;&nbsp;&nbsp;Hypesquad add✅</a><br>
		<a style="color: lime; font-size: 50px; text-decoration: none;" href="#">&nbsp;&nbsp;&nbsp;Discord tokens checker❌</a><br>
	</center>

	<button type="submit" id="gotomenulol" class="themenubutton" onclick="gotomenu()">Menu</button><br><br>

</body>