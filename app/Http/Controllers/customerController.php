<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class customerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        return view('customer');
    }

     public function list(){
       $customers = Customer::all(  );  
       return view('allCustomer')->with(['customers'=>$customers]);
   }
    public function delete($id){
        $customer = Customer::find($id);
        return view('deleteCustomer', $customer);
    }   
    public function destroy($id, Request $req){
        if(Customer::destroy($req->id)){
            return redirect()->route('allCustomer');
        }else{
            return redirect()->route('deleteCustomer', $id);
        }
    }
    public function search(Request $req){
    	$customer = DB::table('customers')
                    ->where('username', $req->username)
                    ->first();
       

        if($customer != null){
          
    	    return view('searchCustomer')->with(['customer'=>$customer]);

    	}else{

            return view('customer');
    	}
    }

    public function feedback(){
    	$messages = DB::table('messages')
                    ->where('toP','admin')
                    ->get();
          
    	 return view('feedback')->with(['messages'=>$messages]);
    }

    public function featuredPost(){
    	$properties = DB::table('properties')
                    ->where('date','>','2020-05-16')
                    ->get();
          
    	 return view('featuredPost')->with(['properties'=>$properties]);
    }
    //
}
