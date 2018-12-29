@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/bookings' : '/admin/bookings/'.$booking->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}

    <div class="form-group">
        <label for="car_type">Car Type</label>
        <select name="car_type" id="car_type" class="form-control">
            <option value="">Select</option>
            @foreach($car_types as $type)
            @if($type->type == old('car_type') || $type->type == $booking->car_type))
            <option selected="selected" value="{{$type->type}}"> {{$type->title}} </option>
            @else
            <option value="{{$type->type}}"> {{$type->title}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="from_address">From Address</label>
        <input name="from_address" type="text" value="{{ old('from_address',$booking->from_address) }}" class="form-control"
            id="from_address">
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="to_address">To Address</label>
        <input type="text" name="to_address" value="{{ old('to_address',$booking->to_address) }}" id="to_address" class="form-control">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" value="{{ old('phone',$booking->phone) }}" id="phone" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email',$booking->email) }}" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="passangers">Passangers</label>
        <input type="text" name="passangers" value="{{ old('passangers',$booking->passangers) }}" id="passangers" class="form-control">
    </div>
    <div class="form-group">
        <label for="mode">Mode</label>    
        <select name="mode" id="mode" class="form-control">        
            <option value="">Select</option>
                @foreach($modes as $mode => $title)
                @if($mode == old('mode') || $mode == $booking->mode))
                <option selected="selected" value="{{$mode}}"> {{$title}} </option>
                @else
                <option value="{{$mode}}"> {{$title}} </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="booking_date">Date & time</label>
        <input type="text" name="booking_date" value="{{ old('booking_date',$booking->booking_date) }}" id="phone"
            class="form-control">
    </div>

    <div class="form-group">
        <label for="distance">Distance (km)</label>
        <input type="text" name="distance" value="{{ old('distance',$booking->distance) }}" id="distance" class="form-control">
    </div>

    <div class="form-group">
        <label for="rate">Rate</label>
        <input type="text" name="rate" value="{{ old('rate',$booking->rate) }}" id="rate" class="form-control">
    </div>

    <div class="form-group">
        <input 
        @if(old('terminal_pickup') == 1 || $booking->terminal_pickup ==1) checked="checked" @endif
        type="checkbox" 
        name="terminal_pickup" 
        id="terminal_pickup" value="1">
        <label for="terminal_pickup">Pick Up from Terminal</label>
    </div>

    <div class="form-group">
        <label for="amount">Amount (Fare)</label>
        <input type="text" name="amount" value="{{ old('amount',$booking->amount) }}" id="amount" class="form-control">
    </div>

    <div class="form-group">
        <label for="discount">Discount</label>
        <input type="text" name="discount" value="{{ old('discount',$booking->discount) }}" id="discount" class="form-control">
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="">Select</option>
            @foreach($status_list as $key => $item)
            @if($key == old('status') || $key == $booking->status))
            <option selected="selected" value="{{$key}}"> {{$item}} </option>
            @else
            <option value="{{$key}}"> {{$item}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>