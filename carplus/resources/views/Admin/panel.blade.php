 @extends('layout')
@section('content')
<div class="container-fluid" style="padding-right: 20%; padding-left: 20%">
    <h1 style="margin-top: 12px;" class="text-center"><a>Admin Panel </a></h1>
<br>

<div class="container" style="padding: 20px">
    <div class="card-deck" >
      <div class="card">
         <img src="">
        <div class="card-body">
          <h5 class="card-title">Add New Vehicle</h5>
          <p class="card-text">Here you can add a new Vehicle</p>
          <a href="addcar" class="btn btn-primary">ADD</a>
        </div>
       </div>
      <div class="card">
       <img src="">
        <div class="card-body">
          <h5 class="card-title">Update Vehicle</h5>
          <p class="card-text">Here you can update a Vehicle</p>
          <a href="updatecar" class="btn btn-primary">UPDATE</a>
        </div>
      </div>
      <div class="card">
         <img src="">
        <div class="card-body">
          <h5 class="card-title">Delete Vehicle</h5>
          <p class="card-text">Here You can delete a Vehicle</p>
          <a href="deletecar" class="btn btn-primary">DELETE</a>
        </div>
      </div>
     </div>
 </div>
 

 

</div> 
@endsection