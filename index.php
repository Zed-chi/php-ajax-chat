
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat on php</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Ubuntu+Mono" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<h1>PHP/JS Chat</h1>
		<div id="chat_box">
			<div id="chat"></div>
		</div>
			<p><input type="text" name="name" placeholder="enter name" required id="nickname"></p>
			<p><textarea name="message" id="msg" cols="30" rows="3" placeholder="enter message" maxlength="100" required></textarea></p>
			<button onclick="send()">Send</button>
	</div>
	<script src='chat.js'></script>
	<script>setInterval(ajax,1000);</script>
</body>
</html>