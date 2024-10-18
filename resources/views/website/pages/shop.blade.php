@extends('website.layouts.master')
@section("hero_title" , "Shop")

@section("content")



		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

                    @foreach ($products as $product )
	                    <!-- Start Column 1 -->
					    <div class="col-12 col-md-4 col-lg-3 mb-5">
						    <a class="product-item" href="{{route('contact_us')}}">
                                <img src="{{asset("assets/images/product-1.png")}}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{$product->title}}</h3>
                                <strong class="product-price">{{$product->price}}</strong>

						    	<span class="icon-cross">
							    	<img src="{{asset("assets/images/cross.svg")}}" class="img-fluid">
							    </span>
						    </a>
					    </div>
					    <!-- End Column 1 -->
                    @endforeach




		      	</div>
		    </div>
		</div>
@endsection
