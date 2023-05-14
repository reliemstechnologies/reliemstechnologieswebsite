<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use App\Models\UserOtp;
use Illuminate\Support\Facades\Auth;


class OtpController extends Controller
{

    public function login(){

        return view('login');
    }

    public function generate(Request $request){

        // dd($request->mobile_number);
        $request->mobile_number = '+91'.$request->mobile_number;
        // dd($request->mobile_number);
        $request->validate([
            'mobile_number' => ['required'] 
        ]);
        
        $mobile_number_present =  User::where('mobile_number',$request->mobile_number)->first();
        if($mobile_number_present === null ){
            User::create([
                'username' => 'SushilB',
                'mobile_number' => $request->mobile_number,
                'email' => 'bhosalesushil.exe@gmail.com',
            ]);
        }
        // dd("otp is valid");
        // dd($request->mobile_number);


        $userOtp = $this->generateOTP($request->mobile_number);
        $userOtp->sendSMS($request->mobile_number); //send otp

        return redirect()->route('otp.verification',[$userOtp->user_id])
            ->with('success','OTP has been sent successfully');

    }

    public function generateOTP($mobile_number){

        $user = User::where('mobile_number',$mobile_number)->first();
        // dd($user);
        $userOtp = UserOtp::where('user_id',$user->id)->latest()->first();

        $now=now();

        if($userOtp && $now->isBefore($userOtp->expire_at)){
            return $userOtp;
        }

        return UserOtp::create([
            'user_id' => $user->id,
            'otp' => rand(123456,999999),
            'expire_at' => $now->addMinute(10),
        ]);
    }

    public function verification($user_id){
        return view('register')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request){

        $request->validate([
            'otp' => 'required',
            'user_id' => 'required'
        ]);

        $userOtp = UserOtp::where('user_id', $request->user_id)->where('otp',$request->otp)->first();

        $now = now();
        if(!$userOtp){
            return redirect()->back()->with('error','Your otp is incorrect');
        }
        else if(!$userOtp && $now->isAfter($userOtp->expires_at)){
            return redirect()->back()->with('error','Your otp is incorrect');
        }

        $user = User::whereId($request->user_id)->first();

        if($user){
            $userOtp->update([
                'expire_at' => now()
            ]);
            Auth::login($user);
            return redirect('/');
        }

        return redirect()->route('otp.login')->with('error','Your otp is not correct');
    }
}
