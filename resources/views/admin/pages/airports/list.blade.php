@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2 col-lg-2">
        @include('admin.pages.airports.sidebar')
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="card">
            <div class="card-header">Airports</div>
            <div class="-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                            <th colspan="2" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($list as $airport)
                        <tr>
                            <td>{{$airport->id}}</td>
                            <td>{{$airport->name}}</td>
                            <td>{{$airport->lat}}</td>
                            <td>{{$airport->lng}}</td>
                            <td>
                                <a class="btn btn-primary" href="/admin/airports/{{$airport->id}}/edit/">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="/admin/airports/delete/{{$airport->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                {{ $list->links("pagination::bootstrap-4")}}
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection