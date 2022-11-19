<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{asset('assets/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('assets/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('assets/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('assets/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('custom/js/select.dataTables.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('custom/css/vertical-layout-light/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
        @stack('styles')
    </head>
    <body>
        <div class="container-scroller">
           @include('layouts.partials.navbar')
           
            <div class="container-fluid page-body-wrapper">
             @include('layouts.partials.sidebar')
              
              
              <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                 </div>
               
                @include('layouts.partials.footer')
              </div>
              
            </div>   
            
          </div>
        <script src="{{asset('assets/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('assets/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('assets/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('custom/js/dataTables.select.min.js')}}"></script>
      
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('custom/js/off-canvas.js')}}"></script>
        <script src="{{asset('custom/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('custom/js/template.js')}}"></script>
        <script src="{{asset('custom/js/settings.js')}}"></script>
        <script src="{{asset('custom/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('custom/js/dashboard.js')}}"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
        @stack('scripts')
    </body>
</html>
