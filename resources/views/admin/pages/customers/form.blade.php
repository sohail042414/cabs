@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/customers' : '/admin/customers/'.$customer->id)
@php($verified_check = (old('verified') == true || $customer->verified == true ) ? 'checked="checked"' : '')
@php($active_check = (old('active') == true || $customer->active == true ) ? 'checked="checked"' : '')

<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    
    <div class="form-group">
        <label for="name">Name </label>
        <input name="name" type="text" value="{{ old('name',$customer->name) }}" placeholder="Full Name"  class="form-control" id="customer-name">
        <small id="titleHelp" class="form-text text-muted">Full Name.</small>
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="text" value="{{ old('email',$customer->email) }}" class="form-control" id="customer-email">
        <small id="titleHelp" class="form-text text-muted">Be carefull editing customer email.</small>
    </div>

    <div class="form-group">
        <label for="email">Active</label>
        <input name="active" value="1" type="checkbox" {{ $active_check }} id="customer-active">
        <small id="titleHelp" class="form-text text-muted">If You de-activate , customer will not be able to login or make booking.</small>
    </div>

    <div class="form-group">
        <label for="verified">Verified</label>
        <input name="verified" type="checkbox" value="1" id="customer-verified" {{ $verified_check}}  >
        <small id="titleHelp" class="form-text text-muted">Means customer is verified using email or boooking.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>