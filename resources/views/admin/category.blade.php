@include('admin.header')
  <body>
@include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <!-- partial -->
        
        <div class="main-panel">
        <div class="content-wrapper">
            <h1 style="text-align:center">Add Category</h1>
            <form action="addcategory" method="post">
                @csrf
                <input type="text" placeholder="Write Your Category" name="category_title"><br><br>
                <input type="Submit" value="Submit">
            </form>
</div>
</div>
