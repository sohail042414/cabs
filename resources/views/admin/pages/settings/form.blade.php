@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/settings' : '/admin/settings/'.$setting->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" value="{{ old('title',$setting->title) }}" class="form-control" id="title">
        <small id="titleHelp" class="form-text text-muted">Used for display.</small>
    </div>

    <div class="form-group">
        <label for="key">Key</label>
        @if($action =='create')
        <input type="text" name="key" value="{{ old('key',$setting->key) }}" id="key" class="form-control">
        @else
        <input type="text" name="key" value="{{ $setting->key }}" id="key" class="form-control" readonly>        
        @endif
        <small id="keyHelp" class="form-text text-muted">Used in programming, not changable</small>
    </div>
    <div class="form-group">
        <label for="value">Value</label>
        <input type="text" name="value" id="value"  class="form-control" value="{{ old('value',$setting->value) }}" >
        <small id="keyHelp" class="form-text text-muted">For boolean keys set 0 for false, 1 for true!, anything other then 0 will be considered true.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>