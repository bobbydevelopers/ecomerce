
<base href="/public">
<style type="text/css">
        .text_size
    {
        padding:20px;   
        text-align:center;
    }
</style>

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
        <h2 class="text_size">Update Product Details</h2>

        <form action="{{url('update_product_confirm',$data->id)}}" method="post" enctype="multipart/form-data">
              @csrf

                Title<input type="text" name="title" value="{{$data->title}}"><br>


                Description<input type="text" name="description" value="{{$data->description}}"><br>


                <label for="category">Change Category</label>

                <select name="category" id="category">

                <option value="{{$data->category}}}">{{$data->category}}</option>

                  @foreach($category as $cat)
                  <option value="{{$cat->category_title}}">{{$cat->category_title}}</option>
                @endforeach
                </select><br>
          

                Price<input type="number" name="price" value="{{$data->price}}"><br>


                Discount<input type="number" name="discount" value="{{$data->discount}}"><br>

                Currnet Image<img  width="100" height="100" src="/product/{{$data->image}}"><br><br>


                Update Image Here<input type="file" name="image"><br>


                <input type="Submit" value="Submit">
            </form>



      </div>
      </div>


