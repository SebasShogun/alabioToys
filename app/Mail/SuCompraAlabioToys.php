<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SuCompraAlabioToys extends Mailable
{
    use Queueable, SerializesModels;

    public $contract;
    public $products;
    public $payment;
    public $shitot,$shitag;
    public $cupon;

    public function __construct($cidx, $productsx,$pay,$shitotx,$shitagx,$cuponx)
    {
          $this->contract = $cidx;
          $this->products = $productsx;
          $this->payment = $pay;
          $this->shitot = $shitotx;
          $this->shitag = $shitagx;
          $this->cupon = $cuponx;
    }

    public function build()
    {
        return $this->subject($this->contract->name.' su Compra Alabio Toys')->view('emails.checkout');
    }
}
