<body style="background-color: orange;">
<p>Id = {{$project->id}}</p>
<p>Name = {{$project->name}}</p>
<p>Email-id = {{$project->email}}</p>
<p>Phone Number = {{$project->Phone}}</p>
<form method="get" action="/form/{{$project->id}}/delete">
	{{method_field('DELETE')}}
	{{csrf_field()}}
	<button name="btn1">DELETE USER</button>
</form>
</body>