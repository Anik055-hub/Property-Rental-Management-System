<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Property;
use Validator;


class propertyController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('property');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'status' => ['required'],
        ]);
    }

    public function list(){
       $properties = Property::all(  );  
       return view('allProperty')->with(['properties'=>$properties]);
    }

    public function edit($id){

		$property = Property::find($id);
		return view('editProperty')->with(['property'=>$property]);

	}

	public function update($id, Request $req){

         $validation = Validator::make($req->all(), [
            'status' => ['required'],
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

        }

        $property = Property::find($id);
        $property->status     = $req->status;

        if($property->save()){
            return redirect()->route('allProperty',$id);
        }else{
            return redirect()->route('editProperty', $id);
        }
    }

    public function search(Request $req){
    	$property = DB::table('properties')
                    ->where('username', $req->username)
                    ->first();
       
        if($property != null){
          
    	     return view('searchProperty')->with(['property'=>$property]);

    	}else{

            return view('property');
    	}
    }

    public function delete($id){
        $property = Property::find($id);
        return view('deleteProperty', $property);
    }

    public function destroy($id, Request $req){
        if(Property::destroy($req->id)){
            return redirect()->route('allProperty');
        }else{
            return redirect()->route('deleteProperty', $id);
        }
    }
    
    public function activeProperty(){
    	$properties = DB::table('properties')
                    ->where('status','active')
                    ->get();
          
    	 return view('activeProperty')->with(['properties'=>$properties]);
    }

    public function rentProperty(){
    	$properties = DB::table('properties')
                    ->where('status','rented')
                    ->get();
          
    	 return view('rentProperty')->with(['properties'=>$properties]);
    }

    public function mostVisitedProperty(){
    	$properties = DB::table('properties')
                    ->orderBy('noOfClicks','desc')
                    ->get();
          
    	 return view('mostVisitedProperty')->with(['properties'=>$properties]);
    }


    //
}
