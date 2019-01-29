@component('mail::message')
# Booking Confirmed.

The body of your message.

@component('mail::button', ['url' => 'http://localhost/booking/details'])
View Details
@endcomponent

{{$booking->from_address}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
