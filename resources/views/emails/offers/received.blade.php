@component('mail::message')
# A new Offer for purchasing {{config('data.domain')}} has been received from {{$offer->name}}.

**Offer Deatails: **,  
Name:  *{{$offer->name}}*  
Email: *{{$offer->email}}*  
Phone: *{{$offer->phone}}*  
Price: *{{$offer->price}}*  
message: *{{$offer->message}}*  

Thanks,<br>
{{ config('app.name') }}
@endcomponent
