<?php

namespace App\Http\Controllers;

use App\Mail\OfferReceived;
use App\Models\Offers;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class OffersController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:18',
            'price' => 'required|int|min:1000|max:10000',
            'message' => 'string|max:1000',
        ]);


        $offer = Offers::Create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'price' => $validated['price'],
            'message' => $validated['message'],

        ]);

        $offer->save();

        Mail::to(config('data.admin_email'))->send(new OfferReceived($offer));
        Mail::to($validated['email'])->send(new OfferReceived($offer));

        return redirect()->route('thankyou');
    }
}
