 @extends('layout')
@section('content')
<div class="container-fluid" style="padding-right: 20%; padding-left: 20%">
<h2 style="margin-top: 12px;" class="text-center">Login </a></h2>
<br>
 
<form action="{{url('/submit')}}" method="POST" >
    @csrf

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="userid" class="form-control" placeholder="Enter User Name">
       </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
             <strong>Password</strong>
            <input type="text" name="password" class="form-control" placeholder="Enter Password">
            
        </div>
    </div>
    <div class="col-md-12">
       
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" style="margin: 1% 48%" >Submit</button>
    </div>
</div>
 
</form>
</div> 
@endsection