<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login',
            'active'=>'login'
        ]);
    }
    public function indexAdmin(){
        return view('login.indexAdmin',[
            'title'=>'Login',
            'active'=>'login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
            'level'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            if($credentials['level']=='Admin'){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            else{
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
            
        }
        return back()->with('loginError','Login failed!');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function postEmail(Request $request){
        $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    $token = str::random(64);
    $validatedData['token']=$token;
    user::where('email', $request->email)->update($validatedData);
    //   DB::table('password_resets')->insert(
    //       ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
    //   );

      Mail::send('login.verify', ['token' => $token, 'email'=>$request->email], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Teman Bearly account');
      });

      return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function reset(Request $request){
        $validatedData = $request->validate([
            'new_password' => ['nullable', 'string'],
            'password'=>'required',
        ]);
        $user = user::where('email', $request->email)->firstOrFail();
        if($validatedData['new_password'] != null){
            if (Hash::check($validatedData['new_password'],$user->password)) {
                $validatedData['password'] = $user->password;
            }else{
                $validatedData['password'] = Hash::make($validatedData['new_password']);
                $validatedData['new_password'] = $validatedData['password'];
            }
        }
        
        user::where('id', $user->id)->update($validatedData);
        return redirect("/login")->with('success','Password has been changed, please login!');
}
}
