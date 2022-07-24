@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.services.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Services</div>
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Short Description</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($list as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{$service->title}}</td>
                                <td>{{$service->short_description}}</td>                                
                                <td>{{$service->description}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/services/{{$service->id}}/edit/">
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