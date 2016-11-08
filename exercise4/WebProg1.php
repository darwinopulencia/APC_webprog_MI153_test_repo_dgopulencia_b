<!doctype>
<html>
<head>
<title>webprog
</title>
</head>

<body background="NuOqxB.png" font style="Comic Sans ms">
<font face="Baskerville Old Face" color="E2E5E7" size="16"><b>Darwin Opulencia</b></font>
<hr size="5" color="white">
<img src="nike.png" alt="Kaneki" height="100" width="100" align="right">
<br>
<br>
<table  BORDER=4 CELLSPACING=4 CELLPADDING=4>
	<tr>
		<th bgcolor="E2E5E7"><font face="Georgia" color="646464">NAME</font></th>
		<th bgcolor="E2E5E7"><font face="Georgia">Darwin Grant G. Opulencia</font></th>
	</tr>
	<tr>
		<th bgcolor="E2E5E7"><font face="Georgia"  color="646464">NICKNAME</font></th>
		<th bgcolor="E2E5E7"><font face="Georgia">Dar</font></th>
	</tr>
	<tr>
		<th bgcolor="E2E5E7"><font face="Georgia"  color="646464">HOBBIES</font></th>
		<th bgcolor="E2E5E7"><font face="Georgia">Listening Music, Watching T.V,</font></th>
	</tr>
	<tr>
		<th bgcolor="E2E5E7"><font face="Georgia"  color="646464">INTEREST</font></th>
		<th bgcolor="E2E5E7"><font face="Georgia">Dancing</font></th>
</table>

<font color="white" font face="Times New Roman" size="4">
<p>1. What is my favorite food?</p>
<p id="food">__________</p>
<button type="button" onclick="document.getElementById('food').innerHTML = '-Sinigang'">
Click me! </button>

<p>2. What is my hobby?</p>
<p id="hobby">__________</p>
<button type="button" onclick="document.getElementById('hobby').innerHTML = '-Listening Music'">
Click me! </button>

<p>3. What is my favorite song?</p>
<p id="song">__________</p>
<button type="button" onclick="document.getElementById('song').innerHTML = '-Mad, by neyo'">
Click me! </button>

<p>4.What is my favorite anime?</p>
<p id="anime">__________</p>
<button type="button" onclick="document.getElementById('anime').innerHTML = '-Tokyo Ghoul'">
Click me! </button>

<p>5. What is my favorite animal?</p>
<p id="animal">__________</p>
<button type="button" onclick="document.getElementById('animal').innerHTML = '-Dinosaur'">
Click me! </button>
<br>
<br>

<?php

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>





</body>
</html>
