@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/services' : '/admin/services/'.$service->id)

<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" value="{{ old('title',$service->title) }}" class="form-control"
            id="title">
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="short_description">Short Description</label>
        <textarea class="form-control" name="short_description" id="short_description">{{ old('short_description',$service->short_description) }}</textarea>  
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>


    <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="6" class="form-control" name="description" id="description">{{ old('description',$service->description) }}</textarea>  
        <small id="emailHelp" class="form-text text-muted"> </small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>