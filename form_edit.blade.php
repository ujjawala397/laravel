<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	 <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 
</head>
<body style="background-color: orange">
	<form method="post" action="/form/{{$project->id}}/update" style="text-align: center;">
		{{method_field('PATCH')}}
		{{csrf_field()}}
		<h1>Edit Details</h1>
		<div class="col-md-12">
		
		Name:<input type="text" name="name" value="{{$project->name}}" placeholder="Name"><br><br>
		
		Email:<input type="text" name="email" value="{{$project->email}}" placeholder="email"><br><br>
		
		Phone:<input type="text" name="phno" value="{{$project->Phone}}" placeholder="phone"><br><br>
		
		Password:<input type="Password" name="pass" value="{{$project->password}}" placeholder="enter password"><br><br>
		
		Cofirm Psw:<input type="Password" name="pass1" value="{{$project->confirmpassword}}" placeholder="enter password"><br><br>

		<button name="btn1" class="btn-danger">Update Details</button>
		</div>

		
	</form>
		

</body>
</html>