<?php
?>

<!DOCTYPE HTML>

<head>
	<title>Draid</title>
	<meta charset="UTF-8">
	<meta name="description" content="Discord raid tool.">
	<meta name="author" content="Jhin Scripter">
	<link rel="icon" href="resources/icone.png">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<style>
body {
  background-image: url("../resources/anotherbg.gif");
  background-repeat: no-repeat;
  background-size: cover;
}
textarea {
  resize: none;
}
.doitlol {
	box-shadow:inset 8px -8px 19px 2px #756308;
	background:linear-gradient(to bottom, #ffea00 5%, #fff700 100%);
	background-color:#ffea00;
	border-radius:14px;
	border:1px solid #f7ff00;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Verdana;
	font-size:28px;
	font-weight:bold;
	padding:22px 62px;
	text-decoration:none;
	text-shadow:3px 2px 7px #3d768a;
}
.doitlol:hover {
	background:linear-gradient(to bottom, #fff700 5%, #ffea00 100%);
	background-color:#fff700;
}
.doitlol:active {
	position:relative;
	top:1px;
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
$(document).ready(function() {
  $('#dawae').click(function() {
    var invite_code = document.getElementById("dcinvitelink").value;
    var tokens_list = document.getElementById("list").value.split("\n");
    var tokens_number = tokens_list.length;
    var cur = 0;
    function update_status() {
    	document.getElementById("thestatuslol").innerHTML = cur + " TOKENS LEFT FROM " + invite_code;
    }

    tokens_list.forEach(function(token, index) {
      posto = $.ajax({
        url: `https://discordapp.com/api/v7/users/@me/guilds/${invite_code}`,
        type: "delete",
        headers: {
            "Authorization": token
        }
      });
      posto.done(function(response, status, a) {
      	cur++;
      	update_status()
        //console.log("Output: " + response)
      });
    })
  })
})
</script>

<script>
	function gotomenu() {
		window.location.replace("../draid")
	}
</script>

<body>

	<center>
		<h1 style="color: lime; font-size: 100px;">Discord Leave</h1>
		<textarea id="list" name="lista" rows="10" required="" cols="100" style="max-width: 100rem; background-color: black; color: lime; font-size: 15px;" class="form-control" placeholder="TOKENS"></textarea><textarea id="dcinvitelink" name="dcinvitelink" rows="10" required="" cols="10" style="max-width: 100rem; background-color: black; color: lime; font-size: 15px;" maxlength="100" class="form-control" placeholder="INVITE"></textarea><br><br><br>
		<button type="submit" id="dawae" class="doitlol" >DO IT!</button><br><br>
		<h1 style="color: cyan; font-size: 35px;" id="thestatuslol">AFK</h1>
	</center>

	<button type="submit" id="gotomenulol" class="themenubutton" onclick="gotomenu()">Menu</button><br><br>

</body>