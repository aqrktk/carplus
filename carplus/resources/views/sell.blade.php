@extends('layout')
@section('content')
<div class="container-fluid" style="padding-right: 20%; padding-left: 20%">
<h2 style="margin-top: 12px;" class="text-center">Sell Your Car</a></h2>
<br>
 
<form action="#" method="POST" name="sellcar">

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Name">
            <span class="text-danger"></span>
        </div>
    </div>
    
     <div class="col-md-12">
        <div class="form-group">
            <strong>CNIC</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter CNIC">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Email">
            <span class="text-danger"></span>
        </div>
    </div>
     <div class="col-md-12">
        <div class="form-group">
            <strong>Address</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Address">
            <span class="text-danger"></span>
        </div>
    </div>
     <div class="col-md-12">
        <div class="form-group">
            <strong>Car Brand</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Brand">
            <span class="text-danger"></span>
        </div>
    </div>
     <div class="col-md-12">
        <div class="form-group">
            <strong>Model</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Model">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Registration</strong>
            <input type="text" name="title" class="form-control" placeholder="Registration">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Conditions</strong>
            <input type="text" name="title" class="form-control" placeholder="Conditions">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Demand</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Price">
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Descriptions</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Type Other Descriptions Here"></textarea>
            <span class="text-danger"></span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Send Details</button>
    </div>
</div>
 
</form>
</div> 
@endsection