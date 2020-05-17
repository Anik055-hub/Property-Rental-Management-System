<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{
	 public function __construct() {
      $this->middleware('auth');
   }
  
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);
    }

   public function profile($id){
       $user = Auth::user(   );  
       return view('profile')->with(['user'=>$user]);
   }
   public function edit($id){

		$user = User::find($id);
		return view('editProfile')->with(['user'=>$user]);

	}
	public function update($id, Request $req){

         $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

        }

        $user = User::find($id);
        $user->name     = $req->name;
        $user->email = $req->email;
        $user->password     = $req->password;

        if($user->save()){
            return redirect()->route('profile',$id);
        }else{
            return redirect()->route('editProfile', $id);
        }
    }
}
