<section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section tariffs-block bg-color-gray" style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="heading  heading-large align-center" id="like_sc_header_9399506">
                        <h4>See our</h4>
                        <h2>Tariffs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">

         @foreach ($tarrifs as $tarrif)
         @php($vip_class = ($tarrif->type =='vip') ? 'vip' : '')
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="tariff-item matchHeight {{$vip_class}}" style="height: 370px;">
                        <div class="image"><img src="/images/{{$tarrif->image}}" class="full-width" alt="Standart"></div>
                        <h4>{{$tarrif->title}}</h4>
                        <p>{{$tarrif->description}}</p>
                        <div class="price">{{$tarrif->rate}}<span> /km </span></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>