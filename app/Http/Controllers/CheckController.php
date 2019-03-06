<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Components\FlashMessages;
use Session;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use App\task;
use Hash;
class CheckController extends Controller
{
	public function signin_method(){
    	return view('/signin');
 		}
	public function signup_method(){
    	return view('/signup');
  		}
	public function loginCheck(Request $request)
    {
    	$this->Validate($request,[
    	'email' => 'required|email',
    	'password' => 'required',
     	]);
    	if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){     		
    		return redirect()->route('dashboard');
    	}
        else{
    		return redirect()->back()->with('warning','Wrong Login Details');
    		}
    	}
		public function postData(Request $request)
    	{
           $input['email'] = $request->get('email');
           $input['firstname'] = $request->get('firstname');
           $input['lastname'] = $request->get('lastname');
           $input['password'] = $request->get('password');
           $input['password_confirmation'] = $request->get('password_confirmation');
           $input['contact'] = $request->get('contact');
            $request->flash();	
			$rules = array('email' => 'required|email|unique:users|max:255,email',
			'firstname' => 'required',
			'lastname' => 'required',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',
			'contact' => 'required',
			);
			$validator = Validator::make($input, $rules);
			if ($validator->fails()) {
    			return redirect()->back()->withErrors($validator);
			}		
			else
			{
			$task = new User();
    		$task->fisrtname = $request->input('firstname');
    		$task->lastname = $request->input('lastname');
    		$task->email = $request->input('email');
    		$pw = $request->input('password');
    		$task->password = Hash::make($pw);
    		$task->contact = $request->input('contact');
    		$task->save();
    		return redirect('/')->with('success','Record Created successfully!');
    	}		
    }
  	 		public function logout () {
    		auth()->logout();
    		return redirect('/')->with('success','Successfully Logged Out!');
			}
}
