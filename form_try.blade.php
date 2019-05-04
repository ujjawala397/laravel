<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
	
	<form method="post" action="/form">
		{{csrf_field()}}
		Name <input type="text" name="name" placeholder="Enter Full name"><br>
		Email<input type="Email" name="email" placeholder="Enter E-mail"><br>
		Phno<input type="text" name="phno" placeholder="Enter mobile number"><br>
		Password<input type="Password" name="pass" placeholder="Enter password"><br>
		<button>submit</button>
	</form>
</body>
</html>