<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>
  <link href="{{ asset('css/backend_css/font-awesome.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/backend_css/font-awesome.min.css') }}" rel="stylesheet"/>

  <link href="{{ asset('css/backend_css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/bootstrap-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/backend_css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/backend_css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/backend_css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/fullcalendar.css') }}"  rel="stylesheet">
  <link href="{{ asset('css/backend_css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/backend_css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('css/backend_css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

    @include('layouts.adminLayout.admin_header')

    @include('layouts.adminLayout.admin_sidebar')

    @yield('content')


  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('js/backend_js/jquery.js') }}"></script>
  <script src="{{ asset('js/backend_js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('js/backend_js/jquery-1.8.3.min.js') }}"></script>
  <script src="{{ asset('js/backend_js/jquery-ui-1.9.2.custom.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/backend_js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('js/backend_js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/backend_js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/backend_js/owl.carousel.js') }}"></script>
  <script src="{{ asset('js/backend_js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/calendar-custom.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/scripts.js') }}"></script>
    <script src="{{ asset('js/backend_js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('js/backend_js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/backend_js/xcharts.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/gdp-data.js') }}"></script>
    <script src="{{ asset('js/backend_js/morris.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/sparklines.js') }}"></script>
    <script src="{{ asset('js/backend_js/charts.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
