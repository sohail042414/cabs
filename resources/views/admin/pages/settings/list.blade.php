@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2 col-lg-2">
        @include('admin.pages.settings.sidebar')
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="card">
            <div class="card-header">Settings</div>
            <div class="-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($list as $setting)
                        <tr>
                            <td>{{$setting->id}}</td>
                            <td>{{$setting->title}}</td>
                            <td>{{$setting->key}}</td>
                            <td>{{$setting->value}}</td>
                            <td>
                                <a class="btn btn-primary" href="/admin/settings/{{$setting->id}}/edit/">
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
@endsection