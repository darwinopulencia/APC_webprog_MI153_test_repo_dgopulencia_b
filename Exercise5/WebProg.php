<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data
			$name = $_POST['name'];
			$nName = $_POST['nName'];
		    $email = $_POST['email'];
			$hAd = $_POST['hAd'];
			$gender = $_POST['gender'];
			$cNum = $_POST['cNum'];
			$comment = $_POST['comment'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO users(name,nName,email,hAd,gender,cNum,message) VALUES ('$name','$nName','$email','$hAd','$gender','$cNum','$comment')";
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database
		}
?>
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
<hr>

<font color="white" font face="Times New Roman" size="4">
<p>1. What is my favorite ddsda?</p>
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
			$nameErr = $nNameErr = $emailErr = $genderErr = $cNumErr = $commentErr = "";
			$name = $nName = $email = $hAd = $gender = $cNum = $comment = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
				$nameErr = "NAME IS REQUIRED ";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["nName"])) {
				$nNameErr = "NICKNAME IS REQUIRED ";
			} else {
				$nName = test_input($_POST["nName"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$nName)) {
				$nNameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["email"])) {
				$emailErr = "E-MAIL IS REQUIRED MAYNE";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "INVALID EMAIL FORMAT MAYNE"; 
				}
			}
		  
			if (empty($_POST["hAd"])) {
				$hAd = "";
			} else {
				$hAd = test_input($_POST["hAd"]);
			}
		  
			if (empty($_POST["gender"])) {
				$genderErr = "GENDER IS REQUIRED";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		  
			if (empty($_POST["cNum"])) {
				$cNumErr = "NUMBER IS REQUIRED";
			} else {
				$cNum = test_input($_POST["cNum"]);
				if (!filter_var($cNum, FILTER_VALIDATE_INT) === FALSE) {
				$cNumErr = "NUMBERS ONLY MAYNE"; 
				}
			}
		  
			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
				}
			}

			function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		?>

<form method="post" >
			<div class="input">
				<div class="col1">
					NAME:
						<input type="text"  name="name" value="<?php echo $name;?>">
						<span class="error"> <?php echo $nameErr;?></span>
						<br><br>
					NICKNAME:
						<input type="text" name="nName" value="<?php echo $nName;?>">
						<span class="error"> <?php echo $nNameErr;?></span>
						<br><br>
					E-MAIL: 
						<input type="text" name="email" value="<?php echo $email;?>">
						<span class="error"> <?php echo $emailErr;?></span>
						<br><br>
					ADDRESS: 
					<textarea name="hAd" rows="3" cols="35"><?php echo $hAd;?></textarea>
				</div>
				<div class="col2">
					GENDER:
						<input type="radio" name="gender" value="FEMALE"/>FEMALE
						<input type="radio" name="gender" value="MALE"/>MALE
						<span class="error"> <?php echo $genderErr;?></span>					
						<br><br>
					CELLPHONE NUMBER:
						<input type="cNum" name="cNum" value="<?php echo $cNum;?>">
						<span class="error"> <?php echo $cNumErr;?></span>
						<br><br>
					COMMENT:
						<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
						<br><br>
				</div>
			</div>
			
			<input type="submit" name="submit" value="SUBMIT" 
			style="background-color: white; color: red; border: white; font-family: simplifica; font-size: 35px; ">
			
		</form>
		<a href="index.php" class=button>MESSAGES ARE HERE DUDE!</a>
	</body>
</body>
</html>
