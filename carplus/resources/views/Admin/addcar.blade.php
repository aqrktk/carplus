 @extends('layout')
@section('content')
<div class="container-fluid" style="padding-right: 20%; padding-left: 20%">
    <h1 style="margin-top: 12px;" class="text-center"><a>Add Car</a></h1>
<br>

 
<form action="{{url('/addsubmit')}}" method="POST" enctype="multipart/form-data" >
@csrf
<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter   Made Country">
       </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Made</strong>
            <input type="text" name="made" class="form-control" placeholder="Enter   Made Country">
       </div>
    </div>
   

    <div class="col-md-12">
        <div class="form-group">
            <strong>Company</strong>
            <input type="text" name="company" class="form-control" placeholder="Enter Company">
       </div>
    </div>

     <div class="col-md-12">
        <div class="form-group">
            <strong>Model</strong>
            <input type="text" name="model" class="form-control" placeholder="Enter Model">
       </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Registration</strong>
            <input type="text" name="registration" class="form-control" placeholder="Enter Registrstion">
       </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Condition</strong>
            <input type="text" name="condition" class="form-control" placeholder="Car Condtion">
       </div>
    </div>

   

    

     <div class="col-md-12">
        <div class="form-group">
             <strong>Price</strong>
            <input type="text" name="price" class="form-control" placeholder="Enter Price">
            
        </div>
    </div>



     <div class="col-md-12">
        <div class="form-group">
             <strong>Color</strong>
            <input type="text" name="color" class="form-control" placeholder="Enter Color">
            
        </div>
    </div>



     <div class="col-md-12">
        <div class="form-group">
             <strong>Description</strong>
            <input type="textarea" name="description" class="form-control" placeholder="Enter Description">
            
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
             <strong>Pictures</strong>
            <input type="file" name="image" class="form-control" placeholder="Enter Description">
            
        </div>
    </div>
    
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" style="margin: 1% 48%" >Add Car</button>
    </div>
</div>
 
</form>


</div> 
 

 

</div> 
@endsection