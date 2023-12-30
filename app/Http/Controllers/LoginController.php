<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\{Mail, Hash};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
  
    public function login(Request $request)
    {
        try {
        
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'email' => 'required|email',
                
            ]);
             if($validator->fails())
             {
                return redirect()->back()->withErrors($validator->errors());
             }
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/index')->withSuccess(trans('messages.Successfully'));
        }else {
            return back()->withErrors(trans('messages.Whoops'));
        }
            
        } catch (\Exception $e) {
            return response()->json(['data'=>[],'msg'=>'auth failed','code'=>400]);
        }
    }

    public function logout(Request $request) 
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
