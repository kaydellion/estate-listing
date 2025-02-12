<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaymentService
{
    protected $gateway;

    public function __construct($gateway = 'stripe')
    {
        $this->gateway = $gateway;
    }

    public function processPayment($amount, $currency = 'USD', $paymentDetails)
    {
        if ($this->gateway === 'stripe') {
            return $this->processStripePayment($amount, $currency, $paymentDetails);
        } elseif ($this->gateway === 'paypal') {
            return $this->processPayPalPayment($amount, $currency, $paymentDetails);
        }

        throw new \Exception("Payment gateway not supported");
    }

    private function processStripePayment($amount, $currency, $paymentDetails)
    {
        // Fake API call example (Replace with real Stripe API)
        return "Stripe payment of $amount $currency successful.";
    }

    private function processPayPalPayment($amount, $currency, $paymentDetails)
    {
        // Fake API call example (Replace with real PayPal API)
        return "PayPal payment of $amount $currency successful.";
    }
}
