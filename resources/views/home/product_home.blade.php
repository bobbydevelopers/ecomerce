      
      <!-- product section -->
      <section class="product_section layout_padding">


         <div class="container">

            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>


            <div class="row">

            @foreach($product as $products)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                          Details
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$products->title}}
                        </h5>
                         
                        @if($products->discount != null)
                        
                           <h5 style="color:blue">
                          ${{$products->price}}
                         </h5>
   
                        <h6 style="color:red;text-decoration:line-through">              
                           ${{$products->discount}}
                        </h6>
                        
                        @else

                        <h5 style="color:blue">
                          ${{$products->price}}
                         </h5>

                         
                        <h5 style="color:blue">
                         
                         </h5>
                        

                        @endif
                     </div>
                     </div>
               </div>

            @endforeach

         </div>


      </section>
      <!-- end product section -->