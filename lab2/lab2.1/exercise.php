<?php

	$name = $_POST["name"];
	$age=$_POST["age"];
	$class = $_POST["class"];
	$university = $_POST["university"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$hobby = $_POST["hobby"];
echo ("Hello, $name");
echo "<br>";
echo ("Your age is: $age");
echo "<br>";
echo ("You are studying $class at $university");
echo "<br>";
echo ("Your email is: $email");
echo "<br>";
echo ("Your gender is: $gender");
echo "<br>";
// if (isset($_POST["submit"])) {
// 	if (!empty($_POST["hobby"])) {
// 		echo ("Your hobbies is: ");
// 		foreach($_POST["hobby"] as $hobby)
// 		{
// 			echo(" 	$hobby");
// 		}
// 	}
// 	else
// 	{
// 		echo("Please select at least one hobby");
// 	}
echo "Your hobby is : ";
foreach($hobby as $value)
        {
          echo $value. ",";
        }



?>