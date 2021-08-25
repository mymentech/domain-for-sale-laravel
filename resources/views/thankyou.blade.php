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
    <script src="{{ mix('js/jquery.min.js') }}"></script>
    <script src="{{ mix('js/jquery-validate.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your
            account setup.</p>
        <hr>
        <p>
            Having trouble? <a href="tel:{{config('data.phone')}}">Call or Text us at {{config('data.phone')}}</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">Continue to
                homepage</a>
        </p>
    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>


</body>

</html>
