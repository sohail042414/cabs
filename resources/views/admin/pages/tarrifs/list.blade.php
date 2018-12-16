@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.tarrifs.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Tarrifs(Car types)</div>
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type(Key)</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Capacity</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($list as $car_type)
                            <tr>
                                <th scope="row">{{$car_type->id}}</th>
                                <td>{{$car_type->type}}</td>
                                <td>{{$car_type->title}}</td>
                                <td>{{$car_type->description}}</td>                                
                                <td>{{$car_type->rate}}</td>
                                <td>{{$car_type->capacity}}</td>
                                <td>
                                    <a href="/admin/tarrifs/{{$car_type->id}}/edit/">
                                        Edit
                                    </a>
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
</div>
@endsection