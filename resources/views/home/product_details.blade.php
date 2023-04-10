<base href="/public">




@include('home.header')

<div class="container">
    <div class="product_details" style="height:500px">
        <div class="row" style="margin-top:40px">

            <div class="col-lg-6">
                <div class="image">
                <img  style="height:400px; width:400px;" src="product/{{$product->image}}">

                </div>
           </div>

            <div class="col-lg-6">
                <div class="more_details" style="margin-top:40px">
               <h5 style="padding:20px"> Title : {{$product->title}}</h5>  
               <h5 style="padding:20px"> Description : {{$product->description}}</h5> 
               <h5 style="padding:20px"> Price : {{$product->price}}</h5> 
               <h5 style="padding:20px"> Discount : {{$product->discount}}</h5>
               <a href="" class="btn btn-primary">Add To Cart</a>
               <a href="" class="btn btn-primary">Buy Now</a>

               </div>
           </div>
        </div>
    </div>
</div>
@include('home.footer')