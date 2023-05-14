<?php

namespace App\Models;

use Twilio\Rest\Client;
// require_once "Twilio/autoload.php";

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Exception;



class UserOtp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'otp',
        'expire_at'
    ];

    public function sendSMS($receiverNumber){
            $message = 'Login otp is '.$this->otp;
            try{

                    $account_id = getenv("TWILIO_SID");
                    $auth_token = getenv("TWILIO_TOKEN");
                    $twilio_number = getenv("TWILIO_FROM");

                    $client = new Client($account_id,$auth_token);
                    $client->messages->create($receiverNumber,[
                        'from' => $twilio_number,
                        'body' => $message
                    ]);

                    info('SMS Sent Successfully');

            }catch(Exception $e){
                info("Error: ".$e->getMessage());
            }

    }
}
