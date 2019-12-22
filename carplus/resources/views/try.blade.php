@extends('welcome')
@section('dat')
<h1>This is section Area.</h1>
<form method="post" action="{{url('/submit')}}">
	{{csrf_field()}}
	Name <input type="text" name="name">
	Registration No <input type="text" name="RegistrationNo">
	<button type="submit">Submit</button>
</form>
@endsection