@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2 col-lg-2">
        @include('admin.pages.faqs.sidebar')
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="card">
            <div class="card-header">Frequently Asked Questions (FAQs)</div>
            <div class="-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sort Order</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($list as $faq)
                        <tr>
                            <td>{{$faq->id}}</td>
                            <td>{{$faq->sort_order}}</td>
                            <td>{{$faq->question}}</td>
                            <td>{{$faq->answer}}</td>
                            <td>
                                <a href="/admin/faqs/{{$faq->id}}/edit/">
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