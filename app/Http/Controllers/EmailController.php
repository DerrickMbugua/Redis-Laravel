<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        Mail::to('derrickmbugua50@gmail.com')->send(new SendMail());
        return "Email sent successfully";
    }
}
