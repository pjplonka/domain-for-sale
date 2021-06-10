<?php

namespace App\Http\Controllers;

use App\Mail\BuyDomainOffer;
use App\Mail\ContactSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        $payload = $this->validate($request, [
            'name' => 'required|string|min:1|max:100',
            'email' => 'required|email',
            'price' => 'required|string|min:1|max:100',
            'captcha' => 'required|string|in:12345',
            'message' => 'nullable|string|min:1|max:500',
        ]);

        $buyDomainOffer = new BuyDomainOffer(
            $payload['name'],
            $payload['email'],
            $payload['price'],
            $request->getHost(),
            $payload['message']
        );

        Mail::to(env('MAIL_USERNAME'))->send(new ContactSubmitted($buyDomainOffer));

        return redirect('/')->with('submit-succeed', 'Submit succeed.');
    }
}
