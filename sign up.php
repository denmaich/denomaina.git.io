<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="code,php,python,java,cyber security">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!-- the body begins here -->
	<body style="background-image:url(pictures/audi_r8_spyder_v10_plus_2018-wallpaper-1366x768.jpg);">	
		<div id="b">
		<div class="nav nav-header" style="text-align: center;">
			<h3>Sign up</h3>
		</div>
		<div class="container">
			<form method="post" style="text-align: center;color: black;" action="forms.php">
				Firstname:<br><input type="text" name="Firstname"><br>
				Sirname:<br><input type="text" name="Sirname"><br>
				Middlename:<br><input type="text" name="Middlename"><br>
				Username:<br><input type="text" name="Username"><br>
				Email:<br><input type="text" name="Email"><br>
				password:<br><input type="number" name="password"><br>
				Gender:<br><input type="text" name="Gender"><br>
               <!-- date of birth begins here -->
				date of birth:
				Date:
				<label for="date"></label>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>5</option>
					<option>6</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
				</select>
				Month:
				<label for="Month"></label>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
				Year:
				<label for="Year"></label>
				<select>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
				</select>
				<br>
				<br>
				Gender:
				<br><input type="radio" name="Male">Male <br>
				<input type="radio" name="Female">Female <br>
				<button type="Submit" class="btn btn-success">Submit</button> <br>
				<br>
				<span class="text-primary" style="font-size: 20px;"> Dont have an Account?</span> <a href="login.php"><span class="text-danger" style="font-size: 20px;">login</span></a>

			</form>
		</div>
	</div>
	</body>

</body>
</html>