<!DOCTYPE html>
<html>
<head>
	<title>Yozowo BASKETBALL school</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="hacking,coding,python,php,java">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	li
	{
		display: inline;
		
	}
	#maich
	{
		background-color: blue;
		float: left;width: 50%;
	}
	#ruth
	{
		background-color: orange;
		float: right;width:50%;

	}
	#j
	{
		text-align: right;
		font-size: 50px;
		color: white;

	}



		


	</style>
</head>
<body>
	
	<div style="background-color: black;">
		<h1 style="color:red; font-family: algerian;font-size: 40px; text-align: center; ">YOZOWO BASKETBALL SCHOOL</h1>
	<div id="j">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="sign up.php">sign up</a></li>
		<li><a href="login.php">login</a></li>
		<li><a href="#ken">aboutus</a></li>
	</ul>
</div>
</div>
	<form method="_GET" style="text-align: center; background-image: url(pictures/submarine_art-wallpaper-1366x768.jpg);">
		English:
		<br><input type="number" name="english"><br>
		Math:<br><input type="number" name="math"><br>
		Geoghraphy:<br><input type="number" name="geography"><br>
		Kiswahili:<br><input type="number" name="Kiswahili"><br>
		Computer:<br><input type="number" name="Computer"><br>
		Chemistry:<br><input type="number" name="Chemistry"><br>
		Physics:<br><input type="number" name="Physics"><br>
		Business:<br><input type="number" name="Business"><br>
		<button class="btn btn-success"> Submit</button>

		

		<?php 
		$result=($_GET['english']+$_GET['geography']+$_GET['Kiswahili']+$_GET['Computer']+$_GET['Chemistry']+$_GET['Physics']+$_GET['Business']+$_GET['math']);
		$Average=$result/8;
		echo "result";
		echo "<br>";
		echo "Average";
		if (isset($_GET['Average'])) {
			# code...
			$Average=$_GET['Average'];

		}
		if ($Average>80) {
			# code...
			echo "A";
		}elseif ($Average>=70) {
			# code...
			echo "A-";
		}elseif ($Average>60) {
			# code...
			echo "B+";
		}elseif ($Average>50) {
			# code...
			echo "B";
		}elseif ($Average>40) {
			# code...
			echo "B-";
		}elseif ($Average>30) {
			# code...
			echo "C+";
		}

		 ?>
	</form>
	<br>
	<br>
	<hr>
	<div id="maich">
<	<center><div><table border="1px" width="50%" cellpadding="2" cellpadding="2">
		<tr>
			<th style="font-family: algerian;font-size:20px">MISSION</th>
		</tr>
	</table>
	</div>	
	
	<p>>We are an organisation that believes in promoting and naturing basketball talent in our country. The organisation is sponsored by well known proffessional basketballers in world in an effort to curb the numerous drug related cases partaken by the youth.The program instils values to the players and even recieve guidance counselling sessions to help them cope with their difficult surrounding and also given problem solving skills, But for the student to continue getting help from us he has to pass the numerous subjects offered and surpass the average grade.</p>
	<button>Get started</button>
</div>
<br>
<hr>
<div id="ruth">
	<center><div><table border="1px" width="50%" cellpadding="2" cellpadding="2">
		<tr>
			<th style="font-family: algerian;font-size:20px">social handles</th>
		</tr>
	</table>
	</div>	
	
	<p>For more about the course offered please follow the innovative fan page in facebook to share creative ideas with people all over the world Or you can follow us in instagram where you get to see the various and latest programs being shared to the world the images about various basket forums which will leave you wanting more.
	</p>
	<button><center>login</center></button>
</div>
<img src="">


	<center>
	<fieldset>
	<footer>MOTTO:<span style="color: red;">GREATNESS REQUIRES INTERNAL TOUGHNESS</span>
	 @copyright&copy; YOZOWO BASKETBALL CLUB.</footer>
	</fieldset>
	</center>


</body>
</html>