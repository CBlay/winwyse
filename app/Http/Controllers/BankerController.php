<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class BankerController extends Controller
{

  public function getBanker(Request $request)
  {
     $request->validate([
      'banker' => 'required:numeric:max:255',
      'amount' => 'required:max:2'
    ]);

    $banker = $request->get('banker');

    if ($banker>90 || $banker<1) {
      return view('welcome');
    }

    $amount = $request->get('amount');

    switch ($amount) {
      case 'hot':
        $pay = 2;
        break;

      default:
        $pay = 3;
        break;
    }

    return view('confirm')
                         ->with('banker', $banker)
                         ->with('amount', $pay);
  }

}
