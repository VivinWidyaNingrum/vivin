<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login dengan PHP dan MySQL</title>
</head>
<body>
	<h1>Membuat Form PHP Login</h1>
	<h3>Login disini :</h3>
	<form action="admin.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>