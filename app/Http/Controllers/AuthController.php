<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'birthday' => 'required|date',
            'phone' => 'required|string',
            'gender' => 'required|string'
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);

        // setelah signup, langsung login
        auth()->login($user);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Email atau password salah']);
        }

        // Generate OTP
        $otp = rand(100000, 999999);

        DB::table('user_otps')->updateOrInsert(
            ['email' => $request->email],
            [
                'otp'        => $otp,
                'expires_at' => now()->addMinutes(5),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );


        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mailleegaming888@gmail.com';
        $mail->Password   = 'ittneyimngihwqtc';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('mailleegaming888@gmail.com', 'J-Techzone');
        $mail->addAddress($request->email);
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification - J-Techzone';

        $mail->Body = <<<EOD
        <!DOCTYPE html>
        <html>
        <head>
          <meta charset="UTF-8">
          <style>
            body { font-family: Arial, sans-serif; background: #f9fafb; padding: 20px; }
            .container { max-width: 600px; margin: auto; background: #fff; border-radius: 8px; padding: 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
            .header { text-align: center; }
            .header h2 { color: #111; }
            .otp-box { margin: 30px auto; text-align: center; padding: 20px; background: #f3f4f6; border-radius: 8px; font-size: 28px; font-weight: bold; letter-spacing: 3px; color: #111; }
            .footer { font-size: 13px; color: #6b7280; margin-top: 30px; text-align: center; }
          </style>
        </head>
        <body>
          <div class="container">
            <div class="header">
              <h2>Email Verification</h2>
            </div>
            <p>Hi,</p>
            <p>Your account is nearly set up. Please use this code to verify your email address:</p>
            <div class="otp-box">
              {$otp}
            </div>
            <p style="text-align:center;">Code will expire in <b>5 minutes</b>.</p>
            <div class="footer">
              <p>Didn’t request this? You can safely ignore this email.</p>
              <p>&copy; 2025 J-Techzone</p>
            </div>
          </div>
        </body>
        </html>
        EOD;

        $mail->AltBody = "Your verification code is: {$otp}";
        $mail->send();

        return redirect()->route('verify.otp.form', ['email' => $user->email]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp'   => 'required|numeric',
        ]);

        $otpData = DB::table('user_otps')
            ->where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otpData) {
            return redirect()
                ->route('verify.otp.form', ['email' => $request->email])
                ->withErrors(['otp' => 'Kode OTP salah atau sudah kadaluarsa. Silakan coba lagi.']);
        }

        // OTP benar → hapus OTP
        DB::table('user_otps')->where('email', $request->email)->delete();

        // login user
        $user = User::where('email', $request->email)->first();
        auth()->login($user);

        return redirect()->route('home')->with('success', 'Login berhasil!');
    }

    public function showVerifyForm($email)
    {
        return view('user.verify', ['email' => $email]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
