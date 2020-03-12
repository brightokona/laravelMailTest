<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;

class MailController extends Controller
{

    public function mail()
    {
       $message = 'This is a sample email content to show that mail was sent.';
       Mail::to('brightokona@gmail.com')->send(new SendTestMail($message));

       return 'Email was sent';
    }
    
    public function send($to, $subject, $message)
    {
       Mail::to('brightokona@gmail.com')->subject($subject)->send(new SendTestMail($message));

       return 'Email was sent';
    }
}
