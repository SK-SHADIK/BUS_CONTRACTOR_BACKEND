<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class SendMailC extends Controller
{
    //
    public function SendMail(){
        Mail::to('19-39357-1@student.aiub.edu')->sent(newSendMail("Bus Contactor", "Regestration Succesfully Complete"));
    }
}
