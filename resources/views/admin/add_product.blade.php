@include('admin.header')
@include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <!-- partial -->
        <style type="text/css"> 
   
        </style>
        <div class="main-panel">
            <div class="content-wrapper">

                  
            <form action="{{url('add_product')}}" method="post" enctype="multipart/form-data">
              @csrf
                Title<input type="text" name="title"><br>
                
                Description<input type="text" name="description"><br>
                <label for="category">Enter Your Category</label>
                <select name="category" id="category">
                  <option value="" selected="">Add a Selected Category Here</option>
                @foreach($category as $cat)
                  <option value="{{$cat->category_title}}">{{$cat->category_title}}</option>
                @endforeach
                </select><br>
          

                Price<input type="number" name="price"><br>
                Image<input type="file" name="image" required=""><br>
                Discount<input type="number" name="discount"><br>
                <input type="Submit" value="Submit">
            </form>
            </div>
            </div>
          <!-- content-wrapper ends -->
 @include('admin.footer')