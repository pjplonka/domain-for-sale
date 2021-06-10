@php
    /** @var \App\Mail\BuyDomainOffer $buyDomainOffer */
@endphp

<h1>
    Domain name: {{ $buyDomainOffer->getDomain() }}
</h1>
<p>
    Potential customer name: {{ $buyDomainOffer->getBuyerName() }}
</p>
<p>
    Potential customer email address: {{ $buyDomainOffer->getBuyerEmail() }}
</p>
<p>
    Potential customer suggested price: {{ $buyDomainOffer->getSuggestedPrice() }}
</p>
<p>
    Potential customer message: {{ $buyDomainOffer->getMessage() }}
</p>
