<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowserAuotmate extends Controller
{
    function automateBrowser(){
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL, "http://localhost:5000/automate/browser/whatsbot");
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          $response = curl_exec($curl);
          // Check for errors
          if (curl_errno($curl)) {
               $error_msg = curl_error($curl);
          }
           curl_close($curl);
          if (isset($error_msg)) {
              return response()->json(['message' => 'Request failed', 'error' => $error_msg], 400);
          }
          $data = json_decode($response);
          return view('qrCode', compact('data'));    
    }
}
