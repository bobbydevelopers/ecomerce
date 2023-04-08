@include('admin.header')
  <body>
@include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <!-- partial -->
        
        <div class="main-panel">
        @include('admin.body')
          <!-- content-wrapper ends -->
 @include('admin.footer')