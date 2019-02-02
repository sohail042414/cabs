@component('mail::message')
# New Booking Order

You have received you request for taxi, Kindly review and assign a driver!!

<p> Booking Date/time : {{$booking->booking_date}} </p>
<p> From  : {{$booking->booking_date}} </p>
<p> To : {{$booking->booking_date}} </p>
<p> Car Type : {{$booking->car_type}} </p>
<p> Distance : {{$booking->distance}} </p>
<p> Rate : {{$booking->rate}} </p>
<p> Amount : {{$booking->amount}} </p>

@component('mail::button', ['url' => url("/admin/booking/{$booking->id}")])
View/Edit Booking
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
