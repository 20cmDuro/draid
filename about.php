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

	<p style="color: lime; font-size: 25px;">In our website you will be able to try some of our Discord raiding tools.</p><br>
	<h1 style="color: red; font-size: 50px;">Contacts:</h1>
	<a style="color: lime; font-size: 25px;">Discord of the developer: Din#4409</a><br>
	<a href="https://discord.gg/sst" target="_blank" style="color: lime; font-size: 25px; text-decoration: none;">Our discord</a><br>

</center>

	<button type="submit" id="gotomenulol" class="themenubutton" onclick="gotomenu()">Menu</button><br><br>

</body>