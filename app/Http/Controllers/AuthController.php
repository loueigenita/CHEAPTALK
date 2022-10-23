<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;




class AuthController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }
    public function loginForm() {
        return view('auth.login');
    }
    public function register (Request $request){
        $request->validate([
            'name'  =>  'required|string',
            'gender'      => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('auth.verification-mail', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('loueigenita@gmail.com', 'C H E A P T A L K');
        });

        return redirect('/login')->with('Message', ' A message has been sent to your email.');

    }

    public function login (Request $request){
        $request->validate([
            'email' => 'email | required',
            'password' => 'string | required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user -> email_verified_at == null){
            return redirect('/login')->with('Error', 'Sorry, you are not yet verified.');
        }
 
        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login){
            return back()->with('Error', 'Invalid Credentials');
        }

        return redirect ('/home');
    }

    public function verification (User $user, $token){
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error', 'Invalid token.');
        }
        
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Account Verified. Log In Now');
    
    }

    public function logout() {
        auth()->logout();
        return redirect('/login')->with('Message', 'Logged Out! ');

    }
    
}
