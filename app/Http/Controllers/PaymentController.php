<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $banker = $paymentDetails['data']['metadata'];
        $amount = $paymentDetails['data']['amount'];

        $json = file_get_contents(__DIR__.'/predictions.json');
        $json_data = json_decode($json,true);

        switch ($amount) {
          case '200':
          $numbers = $json_data[$banker]["first"];

          return view('tada')->with('numbers', $numbers)
                              ->with('numberstwo', '0');

            break;

          default:
          $numbers = $json_data[$banker]["first"];
          $number = $json_data[$banker]["second"];

          return view('tada')
                               ->with('numbers', $numbers)
                               ->with('numberstwo', $number);
            break;
        }



    }
}
