@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.cabs.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Cabs</div>
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type(Key)</th>
                                <th scope="col">Name</th>
                                <th scope="col">Model</th>
                                <th scope="col">Reg#</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($list as $cab)
                            <tr>
                                <th scope="row">{{$cab->id}}</th>
                                <td>{{$cab->type}}</td>
                                <td>{{$cab->name}}</td>
                                <td>{{$cab->model}}</td>
                                <td>{{$cab->reg_number}}</td>                                
                                <td>{{$cab->brand}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/cabs/{{$cab->id}}/edit/">
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