@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/tarrifs' : '/admin/tarrifs/'.$car_type->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}

    <div class="form-group">
        <label for="car_type">Car Type</label>
        <select name="type" id="type" class="form-control">
            <option value="">Select</option>
            @foreach($type_list as $type => $title)
            @if($type == old('type') || ($type == $car_type->type))
            <option selected="selected" value="{{$type}}"> {{$title}} </option>
            @else
            <option value="{{$type}}"> {{$title}} </option>
            @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" value="{{ old('title',$car_type->title) }}" class="form-control"
            id="title">
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description">{{ old('description',$car_type->description) }}</textarea>  
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="rate">Rate</label>
        <input type="text" name="rate" value="{{ old('rate',$car_type->rate) }}" id="rate" class="form-control">
    </div>
    <div class="form-group">
        <label for="capacity">Capacity (Number of persons)</label>
        <input type="text" name="capacity" value="{{ old('capacity',$car_type->capacity) }}" id="rate" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>