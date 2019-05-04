<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<h1>Data From Database</h1>
	@foreach($project as $key)
	<li>{{$key->name}}</li>
	@endforeach
</body>
</html>