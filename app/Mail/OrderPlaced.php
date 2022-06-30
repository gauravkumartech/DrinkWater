<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    protected $advocateData;
    protected $orderData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($advocateData, $orderData)
    {
        $this->advocateData = $advocateData;
        $this->orderData = $orderData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com', 'DrinkWater.com')
            ->view('emails.order_placed_new',[
                'advocateData' => $this->advocateData,
                'orderDetail' => $this->orderData,
            ]);
    }
}
