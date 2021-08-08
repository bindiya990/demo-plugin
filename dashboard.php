<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>
	<br>
	<br>
	<h1 align="center">Welcome To My Demo Plugin</h1>
	<br>
	<form enctype="multi">
	<table align="center" border="1" cellpadding="3" cellspacing="3">
		<tr>
			<td>
				<h1 align="center">Image Demo</h1>
			</td>
		</tr>
		<tr>
			<td>
				<img src="<?php echo plugins_url('image/demo.jpg',__FILE__)?>" alt="Hello">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
