@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="home">
            <a href="/">UKTaxi</a>
        </li>
        <li class="current">// Tarrif</li>
      </ul>
      <h1>Tarrif</h1>
    </div>
  </section>
@include('front.common.section_tarrif')
@endsection