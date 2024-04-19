<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Validator;

class OTPController extends Controller
{
    public function generateOTP(Request $request)
    {
        // Validate email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        // Generate a random 6-digit OTP
        $otp = strval(random_int(100000, 999999));

        // Store the OTP in session (you can use database or cache for more security)
        session(['otp' => $otp]);

        // Send OTP to user's email
        Mail::to($request->email)->send(new OTPMail($otp));

        return response()->json(['message' => 'OTP sent to your email.']);
    }
}
