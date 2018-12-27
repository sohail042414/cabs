@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2 col-lg-2">
        @include('admin.pages.terms.sidebar')
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="card">
            <div class="card-header">Terms and Conditions (T&C)</div>
            <div class="-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sort Order</th>
                            <th scope="col">Title</th>
                            <th scope="col">Text</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($list as $term)
                        <tr>
                            <td>{{$term->id}}</td>
                            <td>{{$term->sort_order}}</td>
                            <td>{{$term->title}}</td>
                            <td>{{$term->text}}</td>
                            <td>
                                <a href="/admin/terms/{{$term->id}}/edit/">
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