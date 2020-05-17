<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
//e Illuminate\Contracts\Session\Session;
//e Config\session;

class HomeController extends Controller
{
   protected $session;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
     return view('home');       
}
     public function profile(){
       $user = Auth::user(   );  
       return view('profile')->with(['user'=>$user]);
   }
    public function edit($id){

         $user = User::find($id);
        return view('editProfile',$user);
    }
     public function list(){
       $customers = Customer::all(  );  
       return view('allCustomer')->with(['customers'=>$customers]);
   }

}

