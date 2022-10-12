@extends('layouts.front')
@section('title')
Welcome to Sotuchauf
@endsection
@section('content')
@include('layouts.inc.slider')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="py-5">
    <div class="container">
    <div class="row">
    <h2>Featured Products</h2>

  <div class="owl-carousel  featured-carousel owl-theme">
        @foreach ($featured_products as $prod)
      
        <div class="item"> 
        <div class="card">
           <img src="{{asset('assets/uploads/products/'.$prod->image)}}" alt="Product image">
        <div class="card-body">
            <h5>{{ $prod->name }}</h5>
            <span class="float-start">{{$prod->selling_price}}</span>
            <span class="float-end"><s>{{$prod->original_price}}</s></span>

            </div>
         </div>
        </div>
    @endforeach
      
    </div>
</div></div></div>
<div class="py-5">
    <div class="container">
    <div class="row">
    <h2>Trending Category</h2>

  <div class="owl-carousel  featured-carousel owl-theme">
        @foreach ($trending_category as $tcategory)
      
        <div class="item">
            <a href="{{url('view-category/'.$tcategory->slug)}}">

        <div class="card">
           <img src="{{asset('assets/uploads/category/'.$tcategory->image)}}" alt="Product image">
        <div class="card-body">
            <h5>{{ $tcategory->name }}</h5>
            <p>
                {{$tcategory->description}}
            </p>
            </div>
         </div>
        </a>
        </div>
    @endforeach
      
    </div>
</div></div></div>

@endsection
@section('scripts')
<script>
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
@endsection