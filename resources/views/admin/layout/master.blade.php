<!DOCTYPE html>

<html
  lang="ar"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="rtl"
  data-theme="theme-default"
  data-assets-path="{{ asset('asset/admin') }}/"
  data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>لوحة التحكم | شركة سريع العربية</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/admin') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('asset/admin') }}/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="{{ asset('asset/admin') }}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('asset/admin') }}/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
       
        @include('admin.layout.menu')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

            @include('admin.layout.nav')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

         @yield('content')


            </div>

          
            @include('admin.layout.footer')
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{ asset('asset/admin') }}/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/node-waves/node-waves.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('asset/admin') }}/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/swiper/swiper.js"></script>
  <script src="{{ asset('asset/admin') }}/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->
  <script src="{{ asset('asset/admin') }}/js/main.js"></script>

  <!-- Page JS -->
  <script src="{{ asset('asset/admin') }}/js/dashboards-analytics.js"></script>

   </body>
