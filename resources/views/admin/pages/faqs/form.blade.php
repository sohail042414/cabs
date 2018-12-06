@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/faqs' : '/admin/faqs/'.$faq->id)


<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div class="form-group">
        <label for="sort_order">Sort Order</label>
        <input name="sort_order" type="text" value="{{ old('sort_order',$faq->sort_order) }}" class="form-control" id="sort_order">
        <small id="emailHelp" class="form-text text-muted">It will be used to display question in FAQs page, starting
            from lowest number. </small>
    </div>

    <div class="form-group">
        <label for="question">Question</label>
        <input type="text" name="question" value="{{ old('question',$faq->question) }}" id="question" class="form-control">
    </div>
    <div class="form-group">
        <label for="answer">Answer</label>
        <textarea name="answer" id="answer" rows="6" style="resize:x;" class="form-control">{{ old('answer',$faq->answer) }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>