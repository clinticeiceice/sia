<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class EmailController extends Controller
{
    public function showEmailForm()
    {
        return view('send-email');
    }

    public function sendEmail(Request $request)
    {
        $toEmail = 'reneegortifacion@gmail.com';
        $subject = 'Test Email';
        $content = 'Test Email from Laravel, for SIA 2 subject by Sir Clint';

        try {
            Mail::to($toEmail)->send(new DemoEmail($subject, $content));

            return redirect('/send-email')->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return redirect('/send-email')->with('error', 'Failed to send email. Please try again later.');
        }
    }
}
