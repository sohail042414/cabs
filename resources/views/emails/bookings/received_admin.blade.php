@component('mail::message')
# New Booking Order

You have received you request for taxi, Kindly review and assign a driver!!

@foreach($booking->showBookingFields() as $field => $data)
{{$data['title']}} : {{ $data['value'] }}       
@endforeach

@component('mail::button', ['url' => url("/admin/booking/{$booking->id}")])
View/Edit Booking
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
