<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class MailChimpController extends Controller
{
    public function index()
    {
        return view('mailchimp');
    }
    public function sendmail(Request $request)
    {
        $email = $request->user_email;
        Newsletter::subscribe($email);
        return redirect('sendemail')->with('status', 'You have been subscribed!');
    }
}
