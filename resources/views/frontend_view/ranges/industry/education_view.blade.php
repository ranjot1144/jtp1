@extends('frontend_view.layouts.layout')
    @section('content')

    <style>
        .accordion {
            background-color: #df983f;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            margin-bottom:5px;
        }
        .accordion:first-of-type{
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .accordion:last-of-type{
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .active, .accordion:hover {
            background-color: #eb7f2d;
        }
        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
        .arrow {
            border: solid #fff;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
            margin-right:10px;
        }
        .up {
            transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
    </style>


    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../../assets/images/product/industry/education_banner.jpg&quot;); height: 47vh; background-position: 50% 1%; min-height: 150px;" id="home-border"> 
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="height: 47vh;">
                <div class="col-md-12 ">

                    <div class="row justify-content-center  align-items-center" style="height: 47vh;">
                        <div class="col-md-12">
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init text-white aos-animate">
                                <h1 class="heading text-white bold-text">{{ $range_data[0]->prod_name; }}</h1>
                                <p class="nsr30 border-left-bar themeTextColor px-md-4"> Testing </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="site-section lighter-bg" id="section-nav">
        <div class="container">

            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center">
                    <h2 class="themeTextColor bold-text mb-5">{{ $range_data[0]->prod_detail }}</h2>
                </div>

                <div class="col-md-12">
                        <div class="card">
                              <div class="card-header">
                                <ul class="nav nav-tabs navmenu">
                                    <div class="col-md-12 general-text-color">
                                        <div class="accordion-div">
                                            @php $last_index = 0; @endphp


                                            @if (count($tags))
                                                @foreach ($tags as $index => $prod_item)
                                                    <button class="accordion accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> {!! str_replace("<br/>", " ", $prod_item->prod_name) !!}</button>
                                                    <div class="panel">
                                                        @php
                                                                $c_tags = explode(",",$prod_item->c_id);
                                                                $cat_tags_data = DB::table('category as c')
                                                                        ->select('c.id as cat_id','c.cat_name','c.cat_url')
                                                                        ->whereIn('c.id', $c_tags)
                                                                        ->get();
                                                        @endphp

                                                        @if (count($cat_tags_data))
                                                            @foreach ($cat_tags_data as $index => $ctags)
                                                                <p class="mt-3"><a href="{{ $ctags->cat_url }}">{{  str_replace("<br/>", " ", $ctags->cat_name) }}</a></p>
                                                            @endforeach
                                                        @endif

                                                        @php
                                                                $sc_tags = explode(",",$prod_item->sc_id);
                                                                $subCat_tags_data = DB::table('subcategory as sc')
                                                                        ->select('sc.id as sub_cat_id','sc.sub_cat_name','sc.subcat_url')
                                                                        ->whereIn('sc.id', $sc_tags)
                                                                        ->get();
                                                        @endphp

                                                        @if (count($subCat_tags_data))
                                                            @foreach ($subCat_tags_data as $index => $sctags)
                                                                <p class="mt-3"><a href="{{ $sctags->subcat_url }}">{{  str_replace("<br/>", " ", $sctags->sub_cat_name) }}</a></p>
                                                            @endforeach
                                                        @endif
                                                        
                                                    </div>
                                                    
                                                @endforeach
                                            @endif 
                                        </div>
                                    </div>
                                  

                                </ul>
                              </div>

                              

                              

                              

                        </div>
                    </div>

            </div>

        </div>
    </section>

    @include('frontend_view.layouts.contact_section')

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


</script>

    @endsection