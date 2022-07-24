@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/drivers' : '/admin/drivers/'.$driver->id)
@php($verified_check = (old('verified') == true || $driver->verified == true ) ? 'checked="checked"' : '')
@php($active_check = (old('active') == true || $driver->active == true ) ? 'checked="checked"' : '')

<form method="POST" action="{{ $action_url }}">
    {{ csrf_field() }}
    {{ method_field($method) }}
    
    <div class="form-group">
        <label for="name">Name </label>
        <input name="name" type="text" value="{{ old('name',$driver->name) }}" placeholder="Full Name"  class="form-control" id="driver-name">
        <small id="titleHelp" class="form-text text-muted">Full Name.</small>
    </div>
    

    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="text" value="{{ old('email',$driver->email) }}" class="form-control" id="driver-email">
        <small id="titleHelp" class="form-text text-muted">Be carefull editing driver email.</small>
    </div>

    @if($action == 'create')
        <div class="form-group">
            <label for="email">Password</label>
            <input name="password" type="Password" id="driver-password" class="form-control" >
            <small id="titleHelp" class="form-text text-muted">At least 6 characters.</small>
        </div>
        
        <div class="form-group">
            <label for="email">Confirm Password</label>
            <input name="password_confirmation"  type="password" class="form-control" id="driver-password">
            <small id="titleHelp" class="form-text text-muted">At least 6 characters.</small>
        </div>
    @endif

    <div class="form-group">
        <label for="email">Active</label>
        <input name="active" value="1" type="checkbox" {{ $active_check }} id="driver-active">
        <small id="titleHelp" class="form-text text-muted">If You de-activate , driver will not be able to login or make booking.</small>
    </div>

    <div class="form-group">
        <label for="verified">Verified</label>
        <input name="verified" type="checkbox" value="1" id="driver-verified" {{ $verified_check}}  >
        <small id="titleHelp" class="form-text text-muted">Means driver is verified using email or boooking.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>