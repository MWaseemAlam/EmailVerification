<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class CustomAuthController extends Controller
{
    //
    public function ShowRegisterForm(){
//return view("AuthCustom.register");
return view("custom/register");
    }//end of function
    public function register(Request $request){
       // $this->validation($request);
      $this->validation($request);
      $request['password']=bcrypt($request->password);
//        User::create($request->all());
        $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
     //Only following Line is Added
       'token'=>str_random(25),
        ]);
   //    $user->notify(new Notifications/VerifyEmail($user));
$user->sendVerificationEmail();
  
  //    return $user;

         
        
        /*User::create([
            'name' => $request['name'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        */
        return redirect('/')->with('Status','You are registed');
    }//end of function


    public function ShowLoginForm(){
        //return view("AuthCustom.register");
        return view("custom/login");
            
    }//end of function
    
    public function login(Request $request){
    
        $this->validate($request,[
                    'email' => 'required|email|max:255|',
                    'password' => 'required|max:255',
                ]);

                if( Auth::attempt( ['email'=>$request->email,'password'=>$request->password] )  ){
                return 'Logged in Successfully';
                }//end of if
       
                return 'Oooops something wrong happens';
  
         
            }//end of function
        




    public function validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|max:255',
        ]);
    }
}
