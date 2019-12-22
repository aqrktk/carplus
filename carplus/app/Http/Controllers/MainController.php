<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\customer;
use App\Admin;
use App\Car;


class MainController extends Controller
{
    //

    public function about(Request $request) {
      return view ('about');
         }

    public function contactus(Request $request) {
      return view ('contactus');
  	}

    public function index(Request $request) {
      return view ('index');
         }

    public function layout(Request $request) {
      return view ('layout');
         }

      
	public function location(Request $request) {
	      return view ('location');
         }

     public function sell(Request $request) {
      return view ('sell');
         }

    public function services(Request $request) {
      return view ('services');
         }

         public function login_view(Request $request) {
      return view ('login');
         }

          public function signup(Request $request) {


      		return view ('signup');
         }

          public function Admin(Request $request) {


      		return view ('admin');
         }

          public function AdminPanel(Request $request) {


      		return view ('Admin.panel');
         }

          public function AddCar(Request $request) {


      		return view ('Admin.addcar');
         }

          public function UpdateCar(Request $request) {


      		return view ('Admin.updatecar');
         }


         public function signupRister(Request $request) {
         	
         	print_r($request->input());
         	/*
         	$name=$request->input('name');
         	$cnic=$request->input('cnic');
         	
         	$city=$request->input('city');
         	$email=$request->input('email');
         	$phone=$request->input('phoneno');
         	$password=$request->input('password');
         	DB::insert('insert into customers(name,cnic,city,email,phone,password) values(?,?,?,?,?,?)', 
         		[$name,$cnic,$city,$email,$phone, $password]);

			DB::table('customers')->insert( ['name' => '$name', 'cnic' => '$cnic','city' =>'$city' ,
				'email' => '$email', 'phone' => '$phone','password' => '$phone']);
				
				
				//letf side name with $customer is attribute of table  and right side is name of input name

				


				$c=new customer;
				$c->name=$request->input('name');
				$c->cnic=$request->input('cnic');
				$c->city=$request->input('city');
				$c->email=$request->input('email');
				$c->phone=$request->input('phoneno');
				$c->password=$request->input('password');
				$c->save();*/


				$customer=new customer;
				$customer->name=$request->input('name');
				$customer->cnic=$request->input('cnic');
				$customer->city=$request->input('city');
				$customer->email=$request->input('email');
				$customer->phone=$request->input('phoneno');
				$customer->password=$request->input('password');

				$customer->save(); 





         
		
         
}




    public function login(Request $request) {
    	$admin=new Admin;
    	$admin->name=$request->input('userid');
    	$admin->password=$request->input('password');
    	$admin->save();


       
         }


         



         public function AddSubmit(Request $request) {
         	     $car=new Car;
         	      $car->name=$request->input('name');
				$car->made=$request->input('made');
				$car->company=$request->input('company');
				$car->model=$request->input('model');
				$car->registration=$request->input('registration');
				$car->condition=$request->input('condition');
				$car->price=$request->input('price');
				$car->color=$request->input('color');
				$car->description=$request->input('description');


        		

        		if($request->hasFile('image'))
        		{
         		 $image = $request->file('image');
          		$filename = time() . '.' . $image->getClientOriginalExtension();
          		$image->move('/uploads/',$filename );
          		//Image::make($image)->resize(300, 300)->save( storage_path('/uploads/' . $filename ) );
          		$car->image = $filename;
          		
        	};

      

				$car->save(); 

         }

          


        
          public function UpdateSubmit(Request $request) {
    	 
    	 
    	$data = Car::where('registration','RIP 215')->get();
    	return view('Admin.updatecar',['data'=>$data]);  	

       
         }


    




}
