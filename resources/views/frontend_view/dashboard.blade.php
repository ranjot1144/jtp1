@extends('frontend_view.layouts.layout')
    @section('content')

        <section class="site-section-hero bg-image" id="section-home">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center top-margin">
                  <h1 class="text-white" data-aos="fade-right"><b>Your Specialist</b></h1>
                  <h1 class="themeTextColor" data-aos="fade-up">Test Strip <span class="text-white">&</span> Filtration</h1>
                  <h1 class="text-white mb-5" data-aos="fade-up">Manufacturer</h1>
                    
                    <!-- <p class="text-white avbook32 mb-5">We Guarantee, High, Quality Products</p> -->
                    <p class="text-white avbook32 mb-5">Your trusted partner in all analytical testing</p>

                      <div class="search-container">
                        <input type="search" name="search" id="search" class="search-input arrow_icon" autocomplete="off" placeholder="Search...product/code" >
                          <div class="search-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="20" viewBox="0 0 512 512">
                              <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                          </div>
                      </div>

                      <div id="search_list"></div>
                </div>
                <div class="col-md-12 text-center floating"> <a href="#about-us"><img class="width-50" src="{{ URL('/assets/images/chevron-down.svg') }}"></a></div>
            </div>
        </section>


        <!-- <section class="site-section-hero zero_padding">
            <div class="row ">
                <div class="col-md-12">
                    <img src="http://127.0.0.1:8000/assets/images/img1.png"  style="width:-webkit-fill-available; opacity:0.7; height:100vh;"/>
                    <div class="centered">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-12 text-center">
                                <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                  <h1 class="text-white" data-aos="fade-right"><b>Your Specialist</b></h1>
                                  <h1 class="themeTextColor" >Test Strip <span class="text-white">&</span> Filtration</h1>
                                  <h1 class="text-white mb-5">Manufacturer</h1>

                                  <p class="text-white avbook32 mb-5">We Guarantee, High, Quality Products</p>
                                </div>

                                <div class="search-container">
                                    <input type="search" name="search" id="search" class="search-input arrow_icon" autocomplete="off" placeholder="Search...product/code" >
                                    <div class="search-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="20" viewBox="0 0 512 512">
                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                      </svg>
                                    </div>
                                </div>

                                <div id="search_list"></div>
                                <div class="col-md-12 text-center floating mt-5"> <a href="#about-us"><img class="width-50" src="{{ URL('/assets/images/chevron-down.svg') }}"></a></div>

                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="site-section align-items-stretch photos gradient-right-to-left" id="about-us-outer">
          <section class="row align-items-stretch photos gradient-right-to-left" id="about-us" style="background: rgb(255 255 255 / 15%); box-shadow: 0px 0px 10px 0px rgb(219 121 41 / 50%);">
            <div class="container">

              <div class="row columns_margin_bottom_20">
                <div class="col-md-4 col-sm-6">
                  <div class="teaser hover_icon text-center">
                    <div>
                      <img class='mb-3 w-50 image-50' src="{{ asset('assets/images/related_image/UK_manufacturing_c.png') }}"> </div>
                      <h2 class="topmargin_20 hover-color2 zero_margin">Since 1938 </h2>
                      <p class="nsr22">UK Manufacturer</p> 
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div class="teaser hover_icon text-center">
                    <div > 
                      <img class='mb-3 w-50 image-50' src="{{ asset('assets/images/related_image/established_brand_c.png') }}"> 
                    </div>
                    <h2 class="topmargin_20 hover-color2 zero_margin">49 Countries </h2>
                      <p class="nsr22">Established Brand</p> 
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                  <div class="teaser hover_icon text-center">
                    <div > 
                      <img class='mb-3 w-50 image-50' src="{{ asset('assets/images/related_image/certified_specialists_c.png') }} "> 
                    </div>
                    <h2 class="topmargin_20 hover-color2 zero_margin">High Quality </h2>
                      <p class="nsr22">Ceritified Specialists</p>
                  </div>
                </div>

              </div>
            </div>
            </section>    
        </section>


        <section class="intro_section" id="slider">
          <div id="carousel-thumb" class="carousel carousel-thumbnails slide" data-ride="carousel" data-interval="2500">
                  <div class="carousel-inner" role="listbox">

                  <div class="carousel-item active">
                        <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/product/Total_Chlorine_Johnson.jpg')}}" alt="First slide">
                          <div class="row carousel-ban-text-adj">
                            <div class="row col-12">
                              <h1 class="col-12 carousel-header-adj bold-text">Total Chlorine 200</h1>
                              <h3 class="col-12 carousel-paragraph themeTextColor avbook32">Testing Range 0- 200 ppm -mgL </h3>
                              <p class="col-12 carousel-paragraph nsr22 mt-0">Disinfection, Sanitisation & Cleaning</p>
                            </div>
                          </div>
                      </div>
                      
                      <div class="carousel-item">
                        <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/product/Oil_Quality_Johnson.jpg')}}" alt="Second slide">
                          <div class="row carousel-ban-text-adj">
                            <div class="row col-12">
                              <h1 class="col-12 carousel-header-adj bold-text">Oil Quality Test Strips</h1>
                              <h3 class="col-12 carousel-paragraph themeTextColor avbook32">A simple and cost effective way </h3>
                              <h3 class="col-12 carousel-paragraph themeTextColor avbook32 mt-0">to track the quality of frying oil </h3>
                            </div>
                          </div>
                      </div>


                      <div class="carousel-item">
                        <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/product/Urine_Johnson.jpg')}}" alt="Third slide">
                        <div class="row carousel-ban-text-adj">
                          <div class="row col-12">
                            <h1 class="col-12 carousel-header-adj bold-text">Urine Test Strips</h1>
                            <h3 class="col-12 carousel-paragraph themeTextColor avbook32">Measure up to 11 Parameters</h3>
                            <p class="col-12 carousel-paragraph nsr22 mt-0">Fast, Accurate, Stable and Precise</p>
                          </div>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/product/VTK_Johnson.jpg')}}" alt="Fourth slide">
                        <div class="row carousel-ban-text-adj">
                          <div class="row col-12">
                            <h1 class="col-12 carousel-header-adj bold-text text-white">Most Simple Version of</h1>
                            <h3 class="col-12 carousel-paragraph text-white avbook32">Colormetric and Titrimetric</h3>
                            <p class="col-12 carousel-paragraph nsr22 mt-0 text-white">Visual Evaluation Test Kits</p>
                          </div>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/product/OEM_homepage_Johnson.jpg')}}" alt="Fifth slide">
                        <div class="row carousel-ban-text-adj">
                          <div class="row col-12 text-uppercase">
                            <h1 class="col-12 carousel-header-adj bold-text">LAUNCH <span class="text-white">Your</span></h1>
                            <h1 class="col-12 carousel-header-adj bold-text" style="margin-left:75px;">OWN <span class="text-white">Brand</span></h1>
                            <p class="col-12 carousel-paragraph">Private Label Manufacturing</p>
                            <h1 class="col-12 carousel-paragraph nsr22 mt-0 heading">OEM <span class="text-white"> One Stop Service</h1>
                          </div>
                        </div>
                      </div>

                </div><!-- carousel-inner -->

                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                  <li data-target="#carousel-thumb" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-thumb" data-slide-to="1"></li>
                  <li data-target="#carousel-thumb" data-slide-to="2"></li>
                  <li data-target="#carousel-thumb" data-slide-to="3"></li>
                  <li data-target="#carousel-thumb" data-slide-to="4"></li>
                </ol>
          </div>
        </section>

        <section class="site-section lighter-bg" id="meet">
            <div class="container">
              <div class="row justify-content-center">
                
                <div class="col-md-12 text-center general-text-color mb-5">
                  <h2 class="themeTextColor mb-3">How can we meet your needs ?</h2>
                  <p class="nsr25">We are commited to supply all industries testing requirements <br/>through continual research and development.</p>
                </div>

                <div class="col-md-12 text-center">
                
                  <figure class="mb-12">
                      
                      <div class="row columns_margin_bottom_20">
                        <?php if($range_data) {
                              for($i=0;$i<count($range_data)-1;$i++) {
                        ?>

                          <div class="col-md-3 col-lg-4 mb-4">
                              <div class="img_hover_color">
                                <?php if($range_data[$i]->range_image=='') { ?>
                                  <img src="{{ asset('assets/images/product/filter-boxes.png') }}" alt="Landing_images">
                                <?php } else { ?>
                                    <img src="{{ URL($range_data[$i]->range_image) }}" alt="<?php echo $range_data[$i]->range_name; ?>" />
                                  <?php } ?>
                                <div class="overlay">
                                  <div class="text">
                                      <a href="{{ URL($range_data[$i]->range_url) }}" class="btn btn-primary btn-md white-border-col text-white">Explore</a>
                                  </div>
                                </div>
                              </div>

                              <div class="range_name">
                                <label class="nsm20">{{ $range_data[$i]->range_name }}</label>
                              </div>
                          </div>
                        <?php } } ?>

                        <div class="col-md-3 col-lg-4 mb-4">
                            <div class="img_hover_color">
                              <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow">
                              <div class="overlay">
                                <div class="text">
                                    <a href="{{ URL('/company/news-development') }}" class="btn btn-primary btn-md white-border-col text-white">Explore</a>
                                </div>
                              </div>
                            </div>

                            <div class="range_name">
                              <label class="nsm20 ">News & Developments</label>
                            </div>
                        </div>
                        
                      </div>
                    
                    </figure>
                </div>

              </div>
            </div>
        </section>

        <!-- <section class="site-section-footer bg-image" style="background-image: url(&quot;../assets/images/left_side_bar.png&quot;); height: 10vh; background-position: top; min-height:150px;" id="home-border"> </section> -->
        <img src='{{ URL("assets/images/product/front_footer.jpg") }}' style="height: 10vh; width:-webkit-fill-available;"></img>
              
    </div>
    @endsection