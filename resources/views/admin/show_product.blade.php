@include('admin.header')

<style type="text/css">
    .center
    {
        color:white;
        margin:auto;
        width:100%;
        text-align:center;
        border:1px solid white;
        margin-top:30px;
    }
    .text_size
    {
        padding:20px;   
        text-align:center;
    }
    .image_size
    {
        width:100px;
        height:100px;
    }
    .th_head
    {
        background-color:skyblue;
    }
    .th
    {
        padding:20px;
    }
</style>
@include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                <table class="center">
                    <h2 class="text_size">Product Details</h2>
                    <tr class="th_head">
                        <th class="th">Tittle</th>
                        <th class="th">Description</th>
                        <th class="th">Category</th>
                        <th class="th">Price</th>
                        <th class="th">Image</th>
                        <th class="th">Discount</th>
                        <th class="th" colspan="2">Action</th>
                    </tr>
                    @foreach($product as $pro)
                    <tr>
                        <td>{{$pro->title}}</td>
                        <td>{{$pro->description}}</td>
                        <td>{{$pro->category}}</td>
                        <td>{{$pro->price}}</td>
                        <td>
                          <img class="image_size" src="/product/{{$pro->image}}">  
                        </td>
                        <td>{{$pro->discount}}</td>

                        <td><a href="{{url('delete_product',$pro->id)}}" class="btn btn-danger">Delete</td>
                        
                        <td><a href="{{url('update_product',$pro->id)}}" class="btn btn-success">Edit</td>
 

                    </tr>
                    @endforeach
                </table>
</div>
            </div>
          <!-- content-wrapper ends -->
 @include('admin.footer')