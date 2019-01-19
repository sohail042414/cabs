@section('content')

@extends('front.layouts.master')

<script src="{{ asset('jquery-ui/jquery-1.11.1.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui-timepicker-addon.js') }}" defer></script>  

<link href="{{ asset('jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('jquery-ui/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">
@include('front.geocode')


<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="home"><a href="/get-taxi">TaxiPark</a></li>
        <li class="current">// Get Taxi</li>
      </ul>
      <h1>Get Taxi</h1>
    </div>
  </section>

<section class="tx-section">
    <div class="container">
      <div class="tx-heading center">
        <h4>OUR OPERATORS ARE WAITING FOR YOUR CALL:</h4>
        <h2>800-5-800</h2>
      </div>


      <div class="row">
        <div class="col-md-6 offset-md-3">

          <p class="text-center">Also you can order a taxi online</p>

          <div class="search-block-box">
          <form  class="form-box pb-4" action="{{ url('/make-booking')}}" method="post">
            {{ csrf_field() }}
              <div id="menu-tarrif" class="menu-wrap">
              @foreach($tarrifs as $tarrif)
              <a
              data-rate="{{$tarrif->rate}}" 
              id="{{$tarrif->type}}" 
              data-value="{{$tarrif->type}}" 
              class=" m-0 car-select-{{$tarrif->type}} @if($tarrif->type ==old('car_type') || (old('car_type')=='' && $tarrif->type =='standard')) active @endif">
              {{$tarrif->title}}</a>
              @endforeach

              <input type="hidden" class="type-value" value="{{ old('car_type','standard') }}" name="car_type" id="car_type">
              <input type="hidden" value="{{ old('distance','0') }}" name="distance" id="distance">
              <input type="hidden" value="{{ old('rate') }}" name="rate" id="rate">
              <input type="hidden" value="{{ old('amount') }}" name="amount" id="amount">
              <input type="hidden" name="form_page" value="get-taxi">
              </div>

              <div class="row" id="geo-from-wrap">
                <div class="col-md-12">
                  <div class="form-input icon location">                    
                    <input data-geo-from="lat" class="lat-lng" type="hidden" id="from_lat" name="from_lat" value="{{ old('from_lat') }}">
                    <input data-geo-from="lng" class="lat-lng" type="hidden" id="from_lng" name="from_lng" value="{{ old('from_lng') }}">
                    <input type="text" id="from_address" name="from_address" value="{{ old('from_address') }}"
                        aria-required="true" aria-invalid="false" placeholder="From Address...">
                    @if($errors->has('from_address'))
                    <span class="error-message">{{ $errors->first('from_address') }}</span>                   
                    @endif
                    
                  </div>
                </div>
              </div>

              <div class="row" id="geo-to-wrap">
                <div class="col-md-12">
                  <div class="form-input icon location">
                  <input data-geo-to="lat" class="lat-lng" type="hidden" id="to_lat" name="to_lat" value="{{ old('to_lat')}}">
                  <input data-geo-to="lng" class="lat-lng" type="hidden" id="to_lng" name="to_lng" value="{{ old('to_lng')}}">                  
                  <input id="to_address" type="text" name="to_address" value="{{ old('to_address') }}"
                        placeholder="To...">
                    @if($errors->has('to_address'))
                    <span class="error-message">{{ $errors->first('to_address') }}</span>                   
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-input icon phone">
                    <input type="text" name="phone" value="{{ old('phone')}}" placeholder="Phone Number">
                    @if($errors->has('phone'))
                      <span class="error-message">{{ $errors->first('phone') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-input icon calendar">
                    <input type="text" value="{{ old('booking_date')}}" id="booking_date" name="booking_date" placeholder="Date">
                    @if($errors->has('booking_date'))
                    <span class="error-message">{{ $errors->first('booking_date') }}</span>
                    @endif    
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="form-input icon email">
                      <input type="text" name="email" value="{{ old('email')}}" placeholder="Email">
                    @if($errors->has('email'))
                      <span class="error-message">{{ $errors->first('email') }}</p>
                    @endif  
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-input icon arrowdown">                  
                      <select name="mode" class="form-select" >
                          <option @if(old('mode') =='one_way') selected="selected" @endif value="one_way">One Way</option>
                          <option @if(old('mode') =='two_way') selected="selected" @endif value="two_way">Two Way</option>
                      </select>  
                      @if($errors->has('mode'))
                        <span class="error-message">{{ $errors->first('mode') }}</p>
                      @endif                
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-input icon arrowdown">
                  <select name="passangers" class="form-select">
                        @for($number = 1;$number<=10; $number++)
                        <option @if(old('passangers') ==$number) selected="selected" @endif value="{{$number}}">{{$number}}</option>
                        @endfor                        
                  </select>
                  @if($errors->has('passangers'))
                        <span class="error-message">{{ $errors->first('passangers') }}</p>
                  @endif  
                  </div>
                </div>

                <div class="col-md-8">
                     <div class="form-input">
                      <label>
                        <input name="terminal_pickup" id="terminal_pickup" class="checkbox-inp" style="display:none" type="checkbox" value="1">                        
                        <span class="checkbox icon check">Pickup from terminal ($5)</span>
                      </label>
                    </div>                  
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p id="estimates" style="display:none;">
                      <span id="span_distance" style="float:left;">Distance :</span> 
                      <span id="span_fare" style="float:right;">Estimated Fare :</span>
                  </p>
                </div>
              </div>

              <div class="row">                
                  <input type="submit" value="Get Taxi" class="form-submit xl">               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<script>
    function set_fare_distance(){

      console.log("Hererer"); 
        var rate = $('#'+$('#car_type').val()).attr('data-rate');        
        var from_lat = $('#from_lat').val();
        var from_lng = $('#from_lng').val();
        var to_lat = $('#to_lat').val();
        var to_lng = $('#to_lng').val();

        //console.log('from_lat:'+from_lat+' || from_lng:'+from_lng+' || to_lat:'+to_lat+' || to_lng:'+to_lng);

        if((from_lat != '') && (from_lng != '') && (to_lng != '') &&(to_lng != '')){        
            var distance = get_distance(from_lat,from_lng,to_lat,to_lng,'K');
            distance = parseFloat(Math.round(distance * 100) / 100).toFixed(2);
            $('#distance').val(distance);
            var fare_total = rate*distance;
            fare_total = parseFloat(Math.round(fare_total * 100) / 100).toFixed(2);
                        
            if($('#terminal_pickup').is(":checked")){
                fare_total = fare_total+5;
            }

            $('#amount').val(fare_total);
            $('#rate').val(rate);

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
        
        $("#terminal_pickup").change(function() {
          set_fare_distance();
        });

        jQuery('#menu-tarrif').on('click', 'a', function() {
          var el = jQuery(this);
          el.addClass('active').siblings('.active').removeClass('active');
          el.parent().find('.type-value').val(el.attr('data-value'));
          set_fare_distance();
          return false;
        });
        
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


@include('front.common.section_tarrif')
@include('front.common.section_clients')
@endsection
