<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserOtp;


class AuthOtpController extends Controller
{
    //

    public function login(){

        return view('auth.OtpLogin');
    }

    public function generate(Request $request){

        dd("generate otp");

        $request->validate([
            'mobile_no' => 'required|exists:users,mobile_no'
        ]);

        $userOtp = $this->generateOTP($request->mobile_no);
        $userOtp->sendSMS($request->mobile_no); //send otp

        return redirect()->route('otp.verification',['user_id',$userOtp->user_id])
            ->with('success','OTP has been sent successfully');

    }

    public function generateOTP($mobile_no){

        $user = User::where('mobile_no',$mobile_no)->first();
        $userOtp = UserOtp::where('user_id',$user->id)->latest()->first();

        $now=now();

        if($userOtp && $now->isBefore($userOtp->expire_at)){
            return userOtp;
        }

        return UserOtp::create([
            'user_id' => $user->id,
            'otp' => rand(123456,999999),
            'expire_at' => $now->addMinute(10),
        ]);
    }
}
