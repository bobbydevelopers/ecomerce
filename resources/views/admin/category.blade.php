


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
            <form action="category" method="post">
                @csrf
                <input type="text" placeholder="Write Your Category" name="category_title">
                <input type="Submit" value="Add Category">
            </form>

            <table><tr>
            <th>Category Name</th>
            <th>Actions</th>
            </tr>
          @foreach($category as $cat)
          <tr>
            <td>{{$cat->category_title}}</td>
            <td><a href="{{url('delete',$cat->id)}}" class="btn btn-danger">Delete</a></td>
         </tr>
       @endforeach
       </table>


</div>
</div>


