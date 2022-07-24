@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/cabs' : '/admin/cabs/'.$cab->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}

    <div class="form-group">
        <label for="car_type">Car Type</label>
        <select name="type" id="type" class="form-control">
            <option value="">Select</option>
            @foreach($type_list as $type => $title)
            @if($type == old('type') || ($type == $cab->type))
            <option selected="selected" value="{{$type}}"> {{$title}} </option>
            @else
            <option value="{{$type}}"> {{$title}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="car_type">Status</label>
        <select name="status" id="type" class="form-control">
            <option value="">Select</option>
            @foreach($status_list as $status => $title)
            @if($status == old('status') || ($status == $cab->status))
            <option selected="selected" value="{{$status}}"> {{$title}} </option>
            @else
            <option value="{{$status}}"> {{$title}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="driver_id">Driver</label>
        <select name="driver_id" id="cab-driver-id" class="form-control">
            <option value="">Select</option>
            @foreach($drivers_list as $id => $driver)
            @if($driver->id == old('driver_id') || ($cab->driver_id == $driver->id))
            <option selected="selected" value="{{$driver->id}}"> {{$driver->name}} </option>
            @else
            <option value="{{$driver->id}}"> {{$driver->name}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="reg_number">Reg Number (Vehicle Numuber)</label>
        <input name="reg_number" type="text" value="{{ old('reg_number',$cab->reg_number) }}" class="form-control"
            id="title">
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="cab-name" value="{{ old('name',$cab->name) }}" > 
        <small id="emailHelp" class="form-text text-muted"> e.g. Accord, BMW X2</small>
    </div>

    <div class="form-group">
        <label for="name">Model</label>
        <input type="text" class="form-control" name="model" id="cab-model" value="{{ old('model',$cab->model) }}" > 
        <small id="emailHelp" class="form-text text-muted"> e.g. 2018, </small>
    </div>

    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" name="brand" id="cab-brand" value="{{ old('brand',$cab->brand) }}" > 
        <small id="emailHelp" class="form-text text-muted">Optional,  e.g. Honda, BMW, Volkswagen  </small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>