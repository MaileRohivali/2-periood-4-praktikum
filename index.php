<?php if(isset($_POST["submit"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$message = "Vormis esines vigu!";}
	else {$message = "Palun logi sisse!";}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Praktikum4</title>
		<style type="text/css">
			form{
				width: 300px;
			}
			input {margin-left: 10px;
			width: 200px;
			height: 35px;
			float: right;
			}
			span{
				float: left;
				line-height: 35px;
			}
		</style>
	</head>
	<body>
		<h2><?php echo $message ;?></h2>
		<form action="" method="post">
			<span>Username:</span><input type="text" name="username"><br>
			<span>Password:</span><input type="password" name="password"><br>
			<span>Saada</span><input type="submit" value="Saada" name="submit"><br>
		</form> 
	</body>
</html>