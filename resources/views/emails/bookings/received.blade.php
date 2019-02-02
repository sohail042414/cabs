@component('mail::message')
# Booking Request Received

We have received you request for taxi, we are reviewing booking details, will confirm you booking soon!
<p> Booking Date/time : {{$booking->booking_date}} </p>
<p> From  : {{$booking->booking_date}} </p>
<p> To : {{$booking->booking_date}} </p>
<p> Car Type : {{$booking->car_type}} </p>

Click on the the link below and check details.
@component('mail::button', ['url' => url("/booking/{$booking->id}")])
View Booking Detail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
