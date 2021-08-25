<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>This Domain is for Sale</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{mix('js/jquery.min.js')}}"></script>
    <script src="{{mix('js/jquery-validate.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
</head>

<body>

    <section class="bg-alt hero p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 bg-faded text-center col-fixed">
                    <div class="vMiddle">
                        <h1 class="pt-4 h2">
                            <span class="text-green">{{config('data.domain')}}</span>
                            <small>available for sale</small>
                        </h1>
                        <p class="mt-4">
                            For instantly purchase. Please make an offer.
                        </p>
                        <div class="pt-5">
                            <label for="name">
                                <a class="btn text-white bg-green btn-lg" id="buy-now-button">Buy now for $3900</a>
                            </label>
                        </div>
                        <div class="row d-md-flex text-center justify-content-center text-primary action-icons">
                            <div class="col-sm-4">
                                <p><em class="ion-ios-telephone-outline icon-md"></em></p>
                                <p class="lead"><a href="tel:{{config('data.phone')}}">{{config('data.phone')}}</a></p>
                            </div>
                            <div class="col-sm-4">
                                <p><em class="ion-ios-chatbubble-outline icon-md"></em></p>
                                <p class="lead"><a href="mailto:{{config('data.email')}}">{{config('data.email')}}</a></p>
                            </div>
                            <div class="col-sm-4">
                                <p><em class="ion-ios-information-outline icon-md"></em></p>
                                <p class="lead"><a href="{{route('faq')}}">Frequently Asked Questions</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-6">
                    <section class="bg-alt">
                        <div class="container">
                            <div class="row height-100">
                                <div class="col-sm-10 offset-sm-1 mt-2">
                                    <form id="main-offer-form" action="{{route('submitOffer')}}" method="post">
                                        @csrf
                                        <h2 class="text-primary">Interested in this domain?</h2>
                                        <hr />
                                        <div class="form-group">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <hr />
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Full name (Required)">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email (Required)">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" name="phone" class="form-control"
                                                        placeholder="Phone number (Required)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="offer-price" type="number" name="price" class="form-control"
                                                min="0" placeholder="Offer price in USD? (Required)">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control"
                                                placeholder="Message (optional)"></textarea>
                                        </div>
                                        <div class="form-group">
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                        

                                        <button type="submit" class="btn text-white btn-lg bg-primary btn-block">Make an
                                            offer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/home.js')}}"></script>
    {!! NoCaptcha::renderJs() !!}


</body>

</html>
