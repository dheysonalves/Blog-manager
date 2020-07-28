<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
		if (isset($_POST['name'])) {
			echo $_POST['name'];
		};
	?>

	<form method="post">
		<input type="text" name="name" />
		<input type="text" name="surname" />
		<button type="submit">Submit</button>
	</form>

</body>
</html>
