@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.drivers.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">
                   Change password For driver ({{$driver->name}})
                    <a class="btn btn-primary" href="/admin/drivers/{{$driver->id}}/edit" style="float:right;">Edit Driver</a>
                </div>
                <div class="card-body">                     
                    @include('admin.common.errors')
                    <form method="POST" action="/admin/drivers/save-password">
                        {{ csrf_field() }}
                        <input type="hidden" name="driver_id" value="{{$driver->id}}">                     
                        
                        <div class="form-group">
                            <label for="email">New Password</label>
                            <input name="password" type="Password" id="driver-password" class="form-control" >
                            <small id="titleHelp" class="form-text text-muted">At least 6 characters.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Confirm Password</label>
                            <input name="password_confirmation"  type="password" class="form-control" id="driver-password">
                            <small id="titleHelp" class="form-text text-muted">At least 6 characters.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection