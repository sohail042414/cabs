<form action="{{ url('/make-booking')}}" method="post" class="wpcf7-form" novalidate="novalidate">
{{ csrf_field() }}
    <div style="display: none;">
        <input type="hidden" name="form_page" value="home">
    </div>
    <div class="menu-types">
        <a href="#" data-value="Standart" class="car-select-0  active">Standart</a>
        <a href="#" data-value="Business" class="car-select-1 ">Business</a>
        <a href="#" data-value="VIP" class="car-select-2 red">VIP</a>
        <a href="#" data-value="Bus-Minivan" class="car-select-3 ">Bus-Minivan</a>
        <input type="hidden" class="type-value" value="standard" name="car_type">
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>
                <span class="wpcf7-form-control-wrap address">
                    <input type="text" name="from_address" value="" size="40" class="wpcf7-form-control  wpcf7-text"
                        aria-invalid="false" placeholder="From ...">
                </span>
            </label>
        </div>
        <div class="col-md-3">
            <label>
                <span class="wpcf7-form-control-wrap to">
                    <input type="text" name="to_address" value="" size="40" class="wpcf7-form-control wpcf7-text"
                        aria-invalid="false" placeholder="To...">
                </span>
            </label>
        </div>
        <div class="col-md-3">
            <label>
                <span class="wpcf7-form-control-wrap phone">
                    <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required "
                        aria-required="true" aria-invalid="false" placeholder="Phone Number">
                </span>
            </label>
        </div>
        <div class="col-md-3">
            <label>
                <span class="wpcf7-form-control-wrap cartype">
                    <input type="date" name="booking_date" value="" size="40" class="wpcf7-form-control wpcf7-text"
                        aria-invalid="false" placeholder="date">
                </span>
            </label>
        </div>
    </div>
    <p><input type="submit" value="Get Taxi" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>

    @if($booking_status != 'no')
    <div class="wpcf7-response-output">
        {{$booking_status}}
    </div>
    @endif

    @if ($errors->any())
    <div class="wpcf7-response-output">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>