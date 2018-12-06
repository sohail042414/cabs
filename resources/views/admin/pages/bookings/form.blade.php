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
        <label for="booking_date">Date & time</label>
        <input type="text" name="booking_date" value="{{ old('booking_date',$booking->booking_date) }}" id="phone"
            class="form-control">
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

    <div class="form-group">
        <label for="discount">Discount</label>
        <input type="text" name="discount" value="{{ old('discount',$booking->discount) }}" id="discount" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>