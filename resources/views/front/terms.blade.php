@extends('front.layouts.master')
@section('content')

<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
      <li class="home"><a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a></li>
        <li class="current"><a href="/terms-conditions">// Terms</a></li>
      </ul>
      <h1>Terms and conditions</h1>
    </div>
  </section>


  <section class="tx-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tx-heading">
                        <h4>Terms and conditions</h4>
                        <!-- <h2>Terms and conditions</h2> -->
                        <!-- <p>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. Sed tristique semper enim, et gravida orci iaculis et. Nulla facilisi.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                   <Div class="terms-block">
                       @foreach($terms as $term)
                      <h2>{{$term->title}}</h2>
                      <div>{!! $term->text !!}</div>
                      <hr>                             
                      @endforeach                     
                   </Div>

                </div>
            </div>

        </div>
  </section>
  @endsection
