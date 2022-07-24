@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.bookings.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                @if(count($cabs) == 0)
                <div class="alert alert-danger">
                    <strong>Error! &nbsp;</strong> There are not free cabs, All booked!
                </div>
                @endif
                <div class="card-header">Assign cab to booking.</div>

                <div class="card-body">
                @include('admin.common.errors')
                    
                    <form method="POST" action="{{ url('/admin/bookings/confirm/'.$booking->id) }}">
                        
                    {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="cab_id">Select Cab</label>
                            <select name="cab_id" id="cab_id" class="form-control">
                                <option value="">Select</option>
                                @foreach($cabs as $cab)
                                @if($cab->id == old('cab_id') || $cab->id == $booking->cab_id))
                                <option selected="selected" value="{{$cab->id}}"> {{ $cab->name." | ".$cab->reg_number." | ".$cab->model}} </option>
                                @else
                                <option value="{{$cab->id}}"> {{ $cab->name." | ".$cab->reg_number." | ".$cab->model}} </option>
                                @endif
                                @endforeach
                            </select>


                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection