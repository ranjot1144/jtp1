<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Johnson Test Paper</title>
            <meta charset="utf-8">
            <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet"> -->
            <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }} ">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/my_style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


            <link rel="stylesheet" href="{{ asset('assets/css/accord-menu.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}" rel="stylesheet"/>
            <link rel="stylesheet" href="{{ asset('assets/css/left.css') }}" rel="stylesheet"/>


            <link rel="stylesheet" href="{{ asset('assets/menu/flexdropdown.css') }}">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

            @vite(['public/assets/css/custom.scss', 'public/assets/css/custom.css'])


    </head>

    <body data-spy="scroll" class="overflow-x-hidden" data-target=".site-navbar-target" data-offset="200">

      <div class="site-wrap">
          @include('frontend_view.layouts.sidebar')
          <main class="main-content">
            @yield('content')
          </main>
      </div>

      <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('assets/js/aos.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/my-style.js') }}"></script>

      <script src="{{ asset('assets/js/accord-menu.js') }}"></script>

    <script>

    $(function() {
    var zeynep = $('.zeynep').zeynep({
      opened: function () {},
      closed: function () {}
    })

    // dynamically bind 'closing' event
    zeynep.on('closing', function () {
      console.log('this event is dynamically binded')
    })

    // handle zeynepjs overlay click
    $('.zeynep-overlay').on('click', function () {
      zeynep.close()
    })

    // open zeynepjs side menu
    $('.btn-open').on('click', function () {
      zeynep.open()
    })
  })

    function openNav() {
      document.getElementById("mySidenav").style.width = "295px";
      document.getElementById("overlaySidenav").classList.toggle("overlay-menu");
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("overlaySidenav").classList.remove("overlay-menu");
    }
        jQuery(document).ready(function ($) {
            if (screen && screen.width > 800) {
                var base_url = window.location.origin;
                var scriptElement = document.createElement('script');
                scriptElement.src = base_url+'/assets/menu/flexdropdown.js';
                document.body.appendChild(scriptElement);
            }
        });

        jQuery(document).ready(function ($) {
            if($("#flexmenu1 li > ul > li > ul > li").length == 0) {
                $("#flexmenu1 li > ul > li > a > img").addClass('Testing');
            }
        })

        $(document).ready(function () {
    // Select all <ul> elements that are children of an <li> element
    var nestedUl = $('ul.second_layer_menu, ul.submenu_third_layer');

    // Iterate over each <ul> element
    nestedUl.each(function () {
        // Check if the current <ul> has <li> elements
        var hasLi = $(this).find('li').length > 0;

        if (hasLi) {
            // Do something if the <ul> has <li> elements
            //console.log('This <ul> has <li> elements:', this);
        } else {
            // Do something else if the <ul> does not have <li> elements
            $(this).prev('li a').addClass('no_submenu');
            //console.log('This <ul> does not have <li> elements:', this);
        }
    });
});
        </script>

      <script>
      $('.owl-carousel').owlCarousel({
          stagePadding: 50,
          loop:true,
          margin:0,
          autoplay:true,
          autoplayTimeout:1000,
          smartSpeed:1500,
          responsiveBaseElement: 'body',
          nav:true,
          dots:false,
          navText: ['<span aria-label="Previous">‹</span>','<span aria-label="Next">›</span>'],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:5
              },
              1000:{
                  items:5
              }

          }
      });


        window.dataLayer = window.dataLayer || [];

        function gtag(){
          dataLayer.push(arguments);
        }
          gtag('js', new Date());
          gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"833c986bcf4c651e","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>