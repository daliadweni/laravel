@extends('layouts.front')
@section ('title', $products->name )

@section ( 'content' )
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class = " py-3 mb-4 shadow-sm bg-warning border-top " >
    <div class = "container" >
        <h6 class = " mb-8 " > Collections /{{$products->category->name}}/ {{$products->name}} </h6>
    </div >
</div >

<div class = " container " >
   <div class = " card shadow product_data " >
       <div class = " card-body " >
            <div class = " row " >
                <div class = " col-md-4 border-right " >
                     <img src = " {{ asset ( 'assets/uploads/products/' .$products ->image) }}" class = "w-100" alt = " " >
                </div >
                <div class = " col-md-8 " >
                     <h2 class = " mb-0 " > 
                         {{ $products->name}}
                         @if($products->trending =='1')
                          <label style = " font-size : 16px ; " class = "float-end badge bg-danger trending_tag">Trending </label>
                        @endif
                        </h2>
                     <hr>
                     <label class =" me-3"> Original Price : <s> Rs {{ $products ->original_price }} </s> </label>
                     <label class ="fw-bold"> Selling Price : Rs {{ $products ->selling_price }} </label>
                     <br>
                     <div class="mt-3">
                        {!!$products->small_description!!}
                     </div>
                     <hr>
                     @if ($products ->qty > 0 )
                     <label class ="badge bg-success"> In stock </label >
                  @else
                     <label class ="badge bg-danger"> Out of stock </label >
                  @endif
                  <div class = " row mt-2 " >
                     <div class = " col-md-3">
                        <input type="hidden" value="{{ $products->id }}" class="prod_id">
                          <label for=" Quantity"> Quantity </label >
                          <div class ="input-group text-center mb-3" style="width:130px;" >
                            <button class =" input-group-text decrement-btn"> - </button >
        <input type ="text " name ="quantity " class ="form-control qty-input text-center" value="1"/>
                <button class ="input-group-text increment-btn" > + </button>
                    
                      </div >
                     </div>
                     <div class = "col-md-10 " >
                        <br/>
                        <button type ="button" class="btn btn-primary me-3 addToCartBtn float-start"> Add to Cart  </button >

 <button type ="button" class = "btn btn-success me-3  float-start " > Add to Wishlist  </button >
    
                  </div >
                             
                     
    </div>
</div>
<div class="col-md-12">
    <br/>
    <h3 >Description</h3>
    <div class="mt-3">
        {!!$products->description!!}

    </div>

</div>
</div>
   </div>
</div>
@endsection

