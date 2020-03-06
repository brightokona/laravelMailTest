<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class MailController extends Controller
{

    public function mail()
    {
       $message = 'Testing from Bright';
       Mail::to('brightokona@gmail.com')->send(new SendMailable($name));

       return 'Email was sent';
    }
}
