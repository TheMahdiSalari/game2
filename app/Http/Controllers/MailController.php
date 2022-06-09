<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('alive2212@gmail.com')->send(new OtpMail(1111));
        return 'Email sent';
    }
}
