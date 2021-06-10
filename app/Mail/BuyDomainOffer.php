<?php

namespace App\Mail;

class BuyDomainOffer
{
    public function __construct(
        private string $buyerName,
        private string $buyerEmail,
        private string $suggestedPrice,
        private string $domain,
        private ?string $message = null
    ) {
    }

    public function getBuyerName(): string
    {
        return $this->buyerName;
    }

    public function getBuyerEmail(): string
    {
        return $this->buyerEmail;
    }

    public function getSuggestedPrice(): string
    {
        return $this->suggestedPrice;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
