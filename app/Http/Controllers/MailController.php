<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo -> sender = 'Nurgaliyeva Kamila';
        $objDemo -> receiver = 'Kamila Nurgaliyeva';

        Mail::to("nurgalievakamila7@gmail.com") -> send(new DemoEmail($objDemo));

    }
}
