<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from esman',
            'body' => 'THis is testing email to user'
        ];
        Mail::to('gamesesman333@gmail.com')->send(new DemoMail($mailData));

        dd('Email send success');
    }
    //
}
