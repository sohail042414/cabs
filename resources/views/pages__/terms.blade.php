@extends('layouts.pages')

@section('content')

@include('common.navbar_main')


<header class="page-header">
    <div class="container">
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        </ul>
        <h1>Terms & Conditions</h1>
    </div>
</header>

<div class="container">
   <!-- Content -->
   <div class="margin-default">
      <div class="row">
         <div class=" col-md-12 text-page">
            <article id="post-589" class="post-589 page type-page status-publish hentry">
               <div class="entry-content clearfix">
                  <div class="vc_row wpb_row vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           
                        @foreach($terms as $term)
                           <div class="wpb_wrapper">
                              <div class="heading  align-left" id="like_sc_header_956753926">
                                 <h4>{{$term->title}}</h4>
                              </div>
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <p>{{$term->text}}</p>
                                 </div>
                              </div>
                              <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </article>
         </div>
      </div>
   </div>
</div>

@endsection