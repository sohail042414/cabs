@extends('layouts.pages')

@section('content')

@include('common.navbar_main')

<header class="page-header">
    <div class="container">
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        </ul>
        <h1>Our services</h1>
    </div>
</header>

<div class="container">
    <!-- Content -->
    <div class="margin-disabled">
        <div class="row">
            <div class=" col-md-12 text-page">
                <article id="post-25" class="post-25 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        @include('common.section_services')
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>



@include('common.section_clients')

@endsection