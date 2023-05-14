<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use App\Models\Payment;

class RazorpayController extends Controller
{
    public function razorpay()
    {        
        return view('checkin');
    }


    public function store(Request $request) {

        // dd($request);
        $mobile_number = $request->input('mobile_number');
        $amount = $request->input('amount');
        $username = $request->input('username');
        $email = $request->input('email');
        // dd($mobile_number,$amount, $email);
        
        $api = new Api ("rzp_test_amX6L7ZY8KQNR7", "FoFQ0Bxu6PhdxjMHuEueMqfL");
        $order = $api->order->create(array('receipt'=>'123','amount'=> '1000','currency'=>'INR'));
        $orderId = $order['id'];
        
        $user_pay = new Payment();
        $user_pay->mobile_number = $mobile_number;
        $user_pay->amount = $amount;
        $user_pay->payment_id = $orderId;
        $user_pay->save();
        
        $data = array(
            'order_id' => $orderId,
            'amount' => $amount
        );

    Session::put('order_id', $orderId);
     Session::put('amount' , $amount);

      
        return redirect()->route('process')->with('data', $data);

    }  

//     RAZORPAY_KEY=rzp_test_amX6L7ZY8KQNR7
// RAZORPAY_SECRET=FoFQ0Bxu6PhdxjMHuEueMqfL

    public function pay(Request $request){
        $data = $request->all();
        $user = Payment::where('payment_id', $data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_payment_id'];

        $api = new Api('rzp_test_amX6L7ZY8KQNR7', 'FoFQ0Bxu6PhdxjMHuEueMqfL');
        try{
            $attributes = array(
                 'razorpay_signature' => $data['razorpay_signature'],
                 'razorpay_payment_id' => $data['razorpay_payment_id'],
                 'razorpay_order_id' => $data['razorpay_order_id']
            );
            $order = $api->utility->verifyPaymentSignature($attributes);
            $success = true;
        }catch(SignatureVerificationError $e){
    
            $succes = false;
        }

        if($success){
            $user->save();
            return redirect('/');
        }else{
    
            return redirect()->route('checkin');
        }
     
    }


    public function processPayment(Request $request){
        return view('process');
    }
    

}