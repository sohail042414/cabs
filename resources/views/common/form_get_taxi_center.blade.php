<form action="{{ url('/make-booking')}}" method="post" class="wpcf7-form" novalidate="novalidate">
{{ csrf_field() }}

    <div class="menu-types">
        <a href="#" data-value="Standart" class="car-select-0  active">Standart</a>
        <a href="#" data-value="Business" class="car-select-1 ">Business</a>
        <a href="#" data-value="VIP" class="car-select-2 red">VIP</a>
        <a href="#" data-value="Bus-Minivan" class="car-select-3 ">Bus-Minivan</a>
        <input type="hidden" class="type-value" value="standard" name="car_type">
        <input type="hidden" name="form_page" value="get-taxi">
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>
                <span class="wpcf7-form-control-wrap address">
                    <input type="text" name="from_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                        aria-required="true" aria-invalid="false" placeholder="From Address...">
                </span>
            </label>
        </div>
        <div class="col-md-6">
            <label>
                <span class="wpcf7-form-control-wrap to">
                    <input type="text" name="to_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                        aria-required="true" aria-invalid="false" placeholder="To...">
                </span>
            </label>
        </div>
        <div class="col-md-6">
            <label>
                <span class="wpcf7-form-control-wrap phone">
                    <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                        aria-required="true" aria-invalid="false" placeholder="Phone Number">
                </span>
            </label>
        </div>
        <div class="col-md-6">
            <p>
                <label>
                    <span class="wpcf7-form-control-wrap your-date">
                        <input type="date" name="booking_date" value="Date and time" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                            min="2018-11-18" max="2018-11-28" step="1" aria-required="true" aria-invalid="false">
                    </span>
                </label>
            </p>
        </div>
    </div>
    <p><input type="submit" value="Get Taxi" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
    @if($booking_status != 'no')
    <div class="wpcf7-response-output">
        {{$booking_status}}
    </div>
    @endif




    @if ($errors->any())

    <div class="wpb_wrapper">
        <div class="alert  alert-warning"><a href="#" class="fa fa-times close"></a>
            <div class="header">
                <span class="fa fa-info-circle"></span>
                Attention!</div>
            <p>All fields are required.</p>
        </div>
    </div>

    <div class="wpcf7-response-output" style="display:none;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form