@extends('layout')
@section('content')
<div class="container-fluid" style="padding-right: 20%; padding-left: 20%">
    <h1 style="margin-top: 12px;" class="text-center">update Car</h1>
<br>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Registration No" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Find</button>
    </form>
    <br>
      <h2 style="margin-top: 12px;" class="text-center">Update car details here</h2>
 <form action="{{url('/updatesubmit')}}" method="POST" >
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Made</strong>
            <input type="text" name="made" class="form-control" placeholder="Enter Made Country">
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
            <input type="file" name="description" class="form-control" placeholder="Enter Description">
            
        </div>
    </div>
    
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" style="margin: 1% 48%" >Update Car</button>
    </div>
</div>
 
</form>

</div>



@endsection

