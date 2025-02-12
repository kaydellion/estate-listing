<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function checkout(Request $request)
    {
        $amount = $request->input('amount');
        $currency = $request->input('currency', 'USD');
        $paymentDetails = $request->only(['card_number', 'cvv', 'expiry_date']);

        $response = $this->paymentService->processPayment($amount, $currency, $paymentDetails);

        return response()->json(['message' => $response]);
    }
}
