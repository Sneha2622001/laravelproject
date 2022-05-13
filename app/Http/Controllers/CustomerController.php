<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
      $url = url('/customer');
      $title = "Customer Registration";
      $data = compact('url' , 'title');
        return view('customer')->with($data);
    }
    public function store(Request $request)
    {
      // p($request->all());
      // die;

      // echo "<pre>";
      // print_r ($request->all());
         //insert querry
      $customer = new Customer;

      $customer->name = $request['name'];
      $customer->email = $request['email'];
      $customer->gender= $request['gender'];
      $customer->address = $request['address'];
      $customer->state = $request['state'];
      $customer->country = $request['country'];
      $customer->dob = $request['dob'];
      $customer->password = md5($request['password']);
      $customer->save();

      return redirect('/customer/view');
    }   

    public function view( Request $request){
      $search = $request['search'] ?? "";
      if($search != "") {
        //where....
        $customers = Customer::where('name' , 'LIKE' , "%$search%")->orwhere('email' , 'LIKE' , "%$search%")->get();

      }else{
        // $customers = Customer::all();
        $customers = Customer::simplePaginate(10);
       }

      
      // echo "<pre>";
      // print_r($customers->toArray());
      // die;

      $data = compact('customers' , 'search');
      return view('customer-view')->with($data);
    }


    public function trash(){
      $customers = Customer::onlyTrashed()->get();
      $data = compact('customers');
      return view('customer-trash')->with($data);
    }    


    //delete button
    public function delete($id){
      
      // $customer = Customer::find($id)->delete();
      //  return redirect()->back();

      $customer = Customer::find($id);
      if(!is_null($customer)){
        $customer->delete();
      }
      return redirect('customer/view');
    }


   //restore button
   public function restore($id){
      
    // $customer = Customer::find($id)->delete();
    //  return redirect()->back();

    $customer = Customer::withTrashed()->find($id);
    if(!is_null($customer)){
      $customer->restore();
    }
    return redirect('customer/view');
  }


  
    //force-delete button
    public function forceDelete($id){
      
      // $customer = Customer::find($id)->delete();
      //  return redirect()->back();

      $customer = Customer::withTrashed()->find($id);
      if(!is_null($customer)){
        $customer->forceDelete();
      }
      return redirect()->back();
    }

    //edit......
    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
          return redirect('customer');
        }else{
          $title = "Update Customer";
          $url = url('/customer/update'). "/" .$id;
          $data = compact('customer' , 'url' , 'title');
          return view('customer')->with($data);
         }
    }

    public function update($id , Request $request){
      $customer = Customer::find($id);

      $customer->name = $request['name'];
      $customer->email = $request['email'];
      $customer->gender= $request['gender'];
      $customer->address = $request['address'];
      $customer->state = $request['state'];
      $customer->country = $request['country'];
      $customer->dob = $request['dob'];
      $customer->save();
      return redirect('customer/view');
    }
}


