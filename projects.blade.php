<header>
<h1>Courses</h1>
</header>
<ul>
	<h2>Code Name Duration Price</h2>
	@foreach($list as $i)
	<li>{{$i->CourseCode}},{{$i->CourseName}},{{$i->CourseDuration}},{{$i->Price}}</li>
	@endforeach
	<footer>Footer</footer>
</ul>