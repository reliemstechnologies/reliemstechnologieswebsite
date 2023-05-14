<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
 

class StartController extends Controller
{
    public function start(){
        return view('start');
    }

    public function pay(){
        return view('rpay');
       }

    public function userLogin(){
        return view('login');
    }

    public function sample(){
        return view('sample');
    }

    public function userRegister(){
        return view('register');
    }

   public function profileCenter(){
    return view('viewCenterDetails');
   }

   public function checkin(Request $request){
    
    $perPerson = $request->noOfPersons;
    $dateTime = $request->dateTime;
    $service = $request->input_service;
    $massage_type = $request->input_massage_type;
    $duration = $request->input_duration;
    $discount = $request->input_discount;
    $total_price = $request->input_total_price;


    $user = Auth::user();   
    if($user){
        $userId = Auth::id();
        $email = Auth::user()->email;
        $username = Auth::user()->username;
        $mobile_number = Auth::user()->mobile_number;



        return view("checkin", compact("userId","email","username","mobile_number","service","massage_type","duration","discount","total_price","perPerson","dateTime"));
    }else{
        return view("checkin", compact("service","massage_type","duration","discount","total_price","perPerson","dateTime"));
    }   
    
   }

   public function orderContent(Request $request){

    $operation_type =  $request->checkbox_val;
    $checkbox =  $request->ops;
    $oldservices =  $request->oldservices;
    $oldmassage_type =  $request->oldmassage_type;
    $oldduration =  $request->oldduration;
    $massage_type = '';
    $service = '';
    $duration = '';
    $data['massage_type'] = $oldmassage_type;
    $data['service'] = $oldservices;
    $data['duration'] = $oldduration;

    
    

    

    if($operation_type == "full_body_massage" || $operation_type == "neck_massage" ||  $operation_type == "back_massage" || $operation_type =="foot_massage" || $operation_type =="head_massage" || $operation_type =="steam_bath" ){
       
        if($checkbox == "checked"){
            $data['service'] =  $operation_type;
        }else if($checkbox =="unchecked"){
            $data['service'] = '';
        }
       
        
   }else if($operation_type == "medium_pressure_massage" ||  $operation_type == "hard_pressure_massage"){

    if($checkbox == "checked"){
        $data['massage_type'] = $operation_type;
       }else if($checkbox =="unchecked"){
        $data['massage_type'] = '';
       }
        
   

   }else if($operation_type == "sixty_min" || $operation_type == "ninety_min" || $operation_type == "one_twenty_min"){

    if($checkbox == "checked"){
      
        $data['duration'] =  $operation_type;
   
       }else if($checkbox =="unchecked"){
       
        $data['duration'] = '';
   
       }

   }

   if($data['duration']=='sixty_min' && $data['massage_type'] =='medium_pressure_massage'){
    $data['calc_amount'] = '1000';
   }else if($data['duration']=='ninety_min' && $data['massage_type'] =='medium_pressure_massage'){
    $data['calc_amount'] = '1500';
   }else if($data['duration']=='one_twenty_min' && $data['massage_type'] =='medium_pressure_massage'){
    $data['calc_amount'] = '2000';
   }else if($data['duration']=='sixty_min' && $data['massage_type'] =='hard_pressure_massage'){
    $data['calc_amount'] = '1200';
   }else if($data['duration']=='ninety_min' && $data['massage_type'] =='hard_pressure_massage'){
    $data['calc_amount'] = '1700';
   }else if($data['duration']=='one_twenty_min' && $data['massage_type'] =='hard_pressure_massage'){
    $data['calc_amount'] = '2200';
   }else{
    $data['calc_amount'] = '';
   }
   

   return response()->json(['service' =>  $data['service'], 'massage_type' => $data['massage_type'], 'duration' => $data['duration'], 'calc_amount' => $data['calc_amount'] ]);

}
  

   
}