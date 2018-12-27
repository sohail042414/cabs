
<script src="{{ asset('jquery-ui/jquery-1.11.1.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui-timepicker-addon.js') }}" defer></script>  

<link href="{{ asset('jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('jquery-ui/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">


<form action="{{ url('/make-booking')}}" method="post" class="wpcf7-form" novalidate="novalidate">
    {{ csrf_field() }}

    <div class="menu-types">
        <a href="#" data-rate="2" id="standard" data-value="standard" class="car-select-0  active">Standard</a>
        <a href="#" data-rate="2.7" id="business" data-value="business" class="car-select-1 ">Business</a>
        <a href="#" data-rate="5" id="vip" data-value="vip" class="car-select-2 red">VIP</a>
        <a href="#" data-rate="4.5" id="van" data-value="van" class="car-select-3 ">Bus-Minivan</a>
        <input type="hidden" class="type-value" value="standard" name="car_type" id="car_type">
        <input type="hidden" name="form_page" value="get-taxi">
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12" id="geo-from-wrap">

            <input data-geo-from="lat" class="lat-lng" type="hidden" id="from_lat" name="from_lat" value="">
            <input data-geo-from="lng" class="lat-lng" type="hidden" id="from_lng" name="from_lng" value="">

            <label>
                <span class="wpcf7-form-control-wrap address">
                    <input type="text" id="from_address" name="from_address" value="" size="40" class="wpcf7-form-control address"
                        aria-required="true" aria-invalid="false" placeholder="From Address...">
                </span>
            </label>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 col-lg-12" id="geo-to-wrap">

                <input data-geo-to="lat" class="lat-lng" type="hidden" id="to_lat" name="to_lat" value="">
                <input data-geo-to="lng" class="lat-lng" type="hidden" id="to_lng" name="to_lng" value="">

                <label>
                    <span class="wpcf7-form-control-wrap to">
                        <input id="to_address" type="text" name="to_address" value="" size="40" class="wpcf7-form-control address"
                            aria-required="true" aria-invalid="false" placeholder="To...">
                    </span>
                </label>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>
                <span class="wpcf7-form-control-wrap phone">
                    <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                        aria-required="true" aria-invalid="false" placeholder="Phone Number">
                </span>
            </label>
        </div>
        <div class="col-md-6">            
            <label>
                <span class="wpcf7-form-control-wrap your-date">
                    <input type="text" id="booking_date" name="booking_date" placeholder="Date" class="wpcf7-form-control"
                            aria-required="true" aria-invalid="false" autocomplete="off">
                </span>
            </label>            
        </div>
    </div>

    <div class="row">

        <div class="col-md-8 col-lg-8">
            <label>
                <span class="wpcf7-form-control-wrap ">
                    <input type="text" name="email" value="" class="wpcf7-form-control wpcf7-text"
                        aria-required="true" aria-invalid="false" placeholder="Email">
                </span>
            </label>
        </div>
        <div class="col-md-4 col-lg-4">
            <label>
                <span class="wpcf7-form-control-wrap select-menu">
                    <div class="select-wrap">
                        <select name="select-menu" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                            <option value="one_way">One Way</option>
                            <option value="two_way">Two Way</option>
                        </select>
                    </div>
                </span> 
            </label>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6 col-lg-6">
            <label>Passangers<br>
                <span class="wpcf7-form-control-wrap ">
                    <input type="text" name="" value="2" class="wpcf7-form-control wpcf7-text"
                        aria-required="true" aria-invalid="false" placeholder="">
                </span>
            </label>
        </div>

        <div class="col-md-6">            
            <span class="wpcf7-form-control-wrap checkbox-347">
                <span class="wpcf7-form-control wpcf7-checkbox">
                    <span class="wpcf7-list-item first last">
                        <label>
                            <br>
                            <input type="checkbox" name="checkbox-347[]" value="Select checkbox" checked="checked">
                            <span class="wpcf7-list-item-label">Pickup from terminal ($5)</span>
                        </label>
                    </span>
                </span>
            </span>        
        </div>
    </div>

    <p id="estimates" style="display:none;">
        <span id="span_distance" style="float:left;">Distance :</span> 
        <span id="span_fare" style="float:right;">Estimated Fare :</span>
    </p>
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
</form>
@include('geocode');
<style>
.menu-types a {
    width:112px;
}
</style>
<script>

    function set_fare_distance(){
        var rate = $('#'+$('#car_type').val()).attr('data-rate');        
        var from_lat = $('#from_lat').val();
        var from_lng = $('#from_lng').val();
        var to_lat = $('#to_lat').val();
        var to_lng = $('#to_lng').val();

        //console.log('from_lat:'+from_lat+' || from_lng:'+from_lng+' || to_lat:'+to_lat+' || to_lng:'+to_lng);

        if((from_lat != '') && (from_lng != '') && (to_lng != '') &&(to_lng != '')){        
            var distance = get_distance(from_lat,from_lng,to_lat,to_lng,'K');
            distance = parseFloat(Math.round(distance * 100) / 100).toFixed(2);
            var fare_total = rate*distance;
            fare_total = parseFloat(Math.round(fare_total * 100) / 100).toFixed(2);
            $('#span_distance').html('Distance: '+distance+'km');  
            $('#span_fare').html('Estimated Fare: $'+fare_total);      

            $('#estimates').show();
        }else{
            $('#estimates').hide();
        }

    }

    //$("#from_address").geocomplete();
    $(document).ready(function(){
        //$('#booking_date').datetimepicker();        
        $('#booking_date').datetimepicker({
            dateFormat:'yy-mm-dd',
            minDate: 0,
        }).datepicker("setDate", new Date());
        
    });

    jQuery('.menu-types').on('click', 'a', function() {
        var el = jQuery(this);
        el.addClass('active').siblings('.active').removeClass('active');
        el.parent().find('.type-value').val(el.attr('data-value'));
        set_fare_distance();
        return false;
    });

    $("#from_address").geocomplete({
        details: "#geo-from-wrap",
        detailsAttribute: "data-geo-from"
    });

    $("#to_address").geocomplete({
        details: "#geo-to-wrap",
        detailsAttribute: "data-geo-to"
    }).bind("geocode:result", function(event, result){
        set_fare_distance();
    });


function get_distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
        return 0;
    }
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit=="K") { dist = dist * 1.609344 }
		if (unit=="N") { dist = dist * 0.8684 }
		return dist;
	}
}
</script>