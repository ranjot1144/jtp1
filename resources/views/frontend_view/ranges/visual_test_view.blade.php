@extends('frontend_view.layouts.layout')
    @section('content')


    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="zero_padding" id="product_banner">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ url('/assets/images/vtk_banner.png'); }}" alt="Filter Finder Banner"/>
                <div class="left-centered">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                                @if($range_data[0]->range_id=='3')
                                    <h1 class="heading text-white" data-aos="fade-right"><b>{{ $range_data[0]->range_name }} </b></h1>
                                    <h1 class="text-white" data-aos="fade-up"><b>Test Strips</b></h1>
                                @else
                                <h1 class="heading" data-aos="fade-right ">Visual Test Kits </h1>
                                <h2 class="heading text-white" data-aos="fade-up">VTKolor</h2>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section lighter-bg" id="prod_content_section">
        <div class="container">


            <div class="row justify-content-center">
            
                <div class="col-md-12 mb-5">
                    <h2 class="mb-4 bold-text text-center">{!! $range_data[0]->prod_name !!}</h2>
                    <div class="content-description">{!! $range_data[0]->prod_desc !!}</div>
                </div>


            <div class="col-md-12">

                <div class="container">
                    <div class="row justify-content-center">

                    @if ($range_data[0]->prod_id=='19' || $range_data[0]->prod_id=='25')

                            <table class="table-striped w-full">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col" width="25%">Product</th>
                                  <th scope="col" width="45%">Graduation</th>
                                  <th scope="col" width="12%">Presentation</th>
                                  <th scope="col" width="10%">Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    @if(!empty($cat_data) && count($cat_data))
                                        @foreach($cat_data as $key => $value)
                                            @php $cat_des = DB::table('category_presentation as cp')
                                                                ->where('cp.cat_id', $value->cat_id)
                                                                ->get();
                                            @endphp
                                            @if ($range_data[0]->prod_id=='19')
                                            <tr>
                                                <td class="bold-text">Description</td>
                                                <td colspan="3">{!! $value->cat_main_desc !!}</td>
                                            </tr>
                                            @endif
                                            <tr >
                                                <td>{!! $value->cat_name !!} </td>
                                                <td>{!! $cat_des[0]->cp_graduation !!}</td>
                                                <td>{{ $cat_des[0]->cp_presentation }}</td>
                                                <td>{{ $cat_des[0]->cp_prod_code }}</td>
                                            </tr>

                                            
                                        @endforeach
                                    @endif
                                  
                                </tbody>
                              </table>
                    @else

                        <?php if(!empty($cat_data) && count($cat_data)) {
                            foreach($cat_data as $value) {
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="teaser hover_icon text-center">
                            <div> 
                                <a class="general-text-color" href="{{ URL($value->cat_url) }}">
                                    @if($value->cat_image!='')
                                        <img class="image-70" src="{{ url('assets/images/'.$value->cat_image) }} " attr="{{ $value->cat_name.'_image' }}" style="width:100%"> </div>
                                    @else
                                        <img class="image-70" src="{{ url('assets/images/ammonia.png') }} " style="width:60%"> </div>
                                    @endif


                                    @php $originalString = $value->cat_name;
                                        $search = "®";
                                        $html = "<sup>®</sup>"; // Sup tag
                                        $value->cat_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                                    @endphp

                                    <label class="bold-text" style="margin:20px 20px 0px 20px;"> {!! $value->cat_name !!} </label>
                                    <p>{{ $value->cat_ranges }}</p> 
                                </a>
                            </div>
                        </div>

                        <?php } } ?>
                    @endif
                    </div>
                </div>

            </div>            

        </div>
    </section>


    <section class="site-section-hero bg-image" style="background-color: rgb(28 119 198); height: 30vh; min-height:250px; background-position:50% 0px; background-attachment:scroll;background-repeat:repeat;" data-stellar-background-ratio="0.5" id="blue-banner">
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                
                <div class="col-md-12">
                
                    <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                        <div class="col-md-8">
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate text-white">
                                <h3 class="bold-text">Explore the Water Analysis Range</h3>
                                <h4 class="mt-0">For All Your Testing Needs at <a class="text-white" href="https://draft.check2o.com/">www.check2o.com/ </a></h4>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img alt="check20logo" src="{{ URL('assets/images/product/Check2Ologo.png') }}" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection