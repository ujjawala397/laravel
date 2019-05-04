<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: orange;">
	<div style="text-align: center;">
	<h1>Users</h1>

	@foreach($projects as $key)
	<li style="list-style: none;">
		<h4>{{$key->name}}</h4>
	</li>
	@endforeach
</div>
<?php
header("refresh:0;url=products.php");
?>
</body>
</html>