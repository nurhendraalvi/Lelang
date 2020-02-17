<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<table><tr><td>
		<form method="POST" action="<?php echo base_url()."index.php/c_login/auth"; ?>">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="masukkan username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="masukkan password"></td>
				</tr>
				<tr>
					<td><input type="reset" name="reset"></td>
					<td colspan="2"><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</td></tr></table>
</body>
</html>