@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/terms' : '/admin/terms/'.$term->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="sort_order">Sort Order</label>
        <input name="sort_order" type="text" value="{{ old('sort_order',$term->sort_order) }}" class="form-control" id="sort_order">
        <small id="emailHelp" class="form-text text-muted">It will be used to display question in FAQs page, starting
            from lowest number. </small>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title',$term->title) }}" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="text">Text(Details)</label>
        <textarea name="text" id="text" rows="10" style="resize:x;" class="form-control">{{ old('text',$term->text) }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>