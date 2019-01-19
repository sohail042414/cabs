@extends('front.layouts.master')

@section('content')
<section class="homepage-1 top-spacing bottom-spacing">

    <div class="container">
    <div class="row">

        <div class="col-md-6">
        <div class="search-block-box gray">
            <form class="form-box pb-4">
            <div class="menu-wrap">
                <a class="menu-icon-1 m-0 active">
                standard
                </a>
                <a class="menu-icon-2 m-0">
                Busniess
                </a>
                <a class="menu-icon-3 m-0">
                Vip
                </a>
                <a class="menu-icon-4 m-0">
                Bus-Minivan
                </a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-input icon location">
                    <input type="text" placeholder="From address">
                    <span class="error-message">Validation messages</span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-input icon location">
                    <input type="text" placeholder="To">
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="form-input icon phone">
                    <input type="number" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-input icon calendar">
                    <input type="text" placeholder="Set date">
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-8">
                    <div class="form-input icon email">
                    <input type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-input icon arrowdown">
                    <select class="form-select">
                        <option value="one_way">One Way</option>
                        <option value="two_way">Two Way</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <div class="form-input icon arrowdown">
                    <select class="form-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-input">

                    <div class="form-input">
                        <label>
                        <input class="checkbox-inp" style="display:none" type="checkbox" value="1">
                        <span class="checkbox icon check">Pickup from terminal ($5)</span>
                        </label>
                    </div>

                    </div>
                </div>

                </div>

                <div class="row">
                <div class="col-md-12">
                    <span class="message">Validation messages</span>
                </div>
                </div>

                <div class="row">
                <input type="submit" value="Get Taxi" class="form-submit xl">
                </div>
            </form>
        </div>        
    </div>    
</div>
</div>
</section>
@include('front.common.section_tarrif')
@include('front.common.section_clients')
@endsection