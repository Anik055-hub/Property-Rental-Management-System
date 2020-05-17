<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use Validator;

class messageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('message');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fromP' => ['required'],
            'toP' => ['required'],
            'msg' => ['required'],
            'msgDate' => ['required'],
        ]);
    }

    public function list(){
       $messages = Message::all(  );  
       return view('allMessage')->with(['messages'=>$messages]);
    }

    public function edit($id){

		$message = Message::find($id);
		return view('editMessage',$message);

	}

	public function update(){
       $messages = Message::all(  );  
       return view('replyMessage')->with(['messages'=>$messages]);
    }

	public function create(Request $req){

         $validation = Validator::make($req->all(), [
            'fromP'=> ['required'],
            'toP' => ['required'],
             'msg' => ['required'],
            'msgDate' => ['required'],
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

        }

        $message = new Message;
        $message->fromP   = $req['fromP'];
        $message->toP     = $req['toP'];
        $message->msg     = $req['msg'];
        $message->msgDate = $req['msgDate'];

        if($message->save()){
            return redirect()->route('updateMessage');
        }else{
            return redirect()->route('editMessage', $id);
        }
    }

    public function delete($id){
        $message = Message::find($id);
        return view('deleteMessage', $message);
    }

    public function destroy($id, Request $req){
        if(Message::destroy($req->id)){
            return redirect()->route('allMessage');
        }else{
            return redirect()->route('deleteMessage', $id);
        }
    }

    public function messageC(){
    	$messages = DB::table('messages')
                    ->where([
                    	['fromP','!=','admin'],
                    	['toP','!=','admin'],
                    ])
                    ->get();
          
    	 return view('messageC')->with(['messages'=>$messages]);
    }

    //
}
