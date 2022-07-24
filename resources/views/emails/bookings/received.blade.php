@component('mail::message')
# Booking Request Received

We have received you request for taxi, we are reviewing booking details, will confirm you booking soon!
@foreach($booking->showBookingFields() as $field => $data)
{{$data['title']}} : {{ $data['value'] }}       
@endforeach
Click on the the link below and check details.
@component('mail::button', ['url' => url("/booking-detail/{$booking->id}")])
View Booking Detail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
