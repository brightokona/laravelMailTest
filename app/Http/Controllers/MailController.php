<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;

class MailController extends Controller
{

    public function mail()
    {
       $message = 'Testing from Bright';
       Mail::to('brightokona@gmail.com')->send(new SendTestMail($message));

       return 'Email was sent';
    }
}
