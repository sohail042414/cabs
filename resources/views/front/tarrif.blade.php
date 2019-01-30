@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="home">
          <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
        </li>
        <li class="current">
          <a href="/tarrif">// Tarrif</a>
        </li>
      </ul>
      <h1>Tarrif</h1>
    </div>
  </section>
@include('front.common.section_tarrif')
@endsection