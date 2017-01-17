<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Boxmodel</title>
</head>

<style>
	body{
		font-family: sans-serif;
	}

	form{
        display: table;
    }

    form div, form label, form input {
        display: table-row;
    }


</style>

<body>

<h1>Dades Personals</h1>

<form action="#">
	<div>
		<label for="name">First Name</label>
		<input type="text" name="name">
	</div>

	<div>
		<label for="lastname">Last Name</label>
		<input type="text" name="lastname">
	</div>

	<div>
		<label for="age">Age</label>
		<input type="text" name="age">
	</div>
</form>

</body>
</html>