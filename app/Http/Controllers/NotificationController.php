<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
  public function send()
  {
    $basic  = new \Vonage\Client\Credentials\Basic("0d702292", "u3WGcjRxOysPXpbW");
    $client = new \Vonage\Client($basic);


    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS("201277807195",'IDRS', 'Hello From IDRSsend-sms-notification  ')
    );

    $message = $response->current();

    if ($message->getStatus() == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $message->getStatus() . "\n";
    }
  }
}
