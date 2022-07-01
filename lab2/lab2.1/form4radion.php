<html>
<head>
	<title>Receiving Input</title>
</head>

</html>
<body>
	<font size="5">Thank You: Got Your Input.</font><br>
<?php 
	$email = $_POST["email"];
	$contact = $_POST["contact"];
	echo "Your email is $email <br />";
	echo "Contact preference is $contact";
 ?>

</body>

