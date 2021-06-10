<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(private BuyDomainOffer $buyDomainOffer)
    {}

    public function build(): self
    {
        return $this
            ->subject('Someone wants to buy your domain!')
            ->view('mails.contact-submitted')
            ->with('buyDomainOffer', $this->buyDomainOffer);
    }
}
