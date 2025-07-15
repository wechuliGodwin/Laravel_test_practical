<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
  public function send(Request $request)
  {
    if ($request->isMethod('post')) {

      $to = request("phone");
      $from = env('TWILIO_FROM'); // E.g. "+1415XXXXXXX"
      $message = request("message");

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_USERPWD, env('TWILIO_SID') . ':' . env('TWILIO_AUTH_TOKEN'));
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

      // ✅ Corrected URL
      curl_setopt($ch, CURLOPT_URL, 'https://api.twilio.com/2010-04-01/Accounts/' . env('TWILIO_SID') . '/Messages.json');

      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'To' => $to,
        'From' => $from,
        'Body' => $message,
      ]));

      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


      $result = curl_exec($ch);
      $error = curl_error($ch);
      curl_close($ch);

      $decoded = json_decode($result, true);

      if (isset($decoded['sid'])) {
        return back()->with('success', 'Message sent successfully.');
      } else {
        return back()->with('error', 'Failed to send message: ' . ($decoded['message'] ?? $error));
      }
    }

    return view('sms');
  }
}
