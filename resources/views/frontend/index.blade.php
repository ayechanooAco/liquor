<x-frontend>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       
    <div class="hero-wrap" style="background-image: url('logo/image.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
       <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100 text-center">
	            <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>

	            <!--   <h1 class="mb-4">Let's Fight <span>COVID-19</span>.</h1> -->





	          <!--   <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> </p> -->
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
    <div class="carousel-item">
      <div class="hero-wrap" style="background-image: url('logo/back.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
       <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100 text-center">
	            <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
	           <!--  <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> </p> -->
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
    <div class="carousel-item">
      <div class="hero-wrap" style="background-image: url('logo/ground.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
       <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100 text-center">
	            <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
	          <!--   <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> </p> -->
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span> -->


  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <!--   <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span> -->
  </a>







</div>

</div>
<section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-support"></span>
    					</div>
    					<div class="text">
    						<h2>Online Support 24/7</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-cashback"></span>
    					</div>
    					<div class="text">
    						<h2>Money Back Guarantee</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-free-delivery"></span>
    					</div>
    					<div class="text">
    						<h2>Free Shipping &amp; Return</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

  
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					@foreach($categories as $category)
					
					<div class="col-lg-3 col-md-3 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url({{asset($category->photo)}});"></div>
							<h3>{{$category->name}}</h3>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Delightful offerings</span>
            <h2>Tastefully Yours</h2>
          </div>
        </div>
			<div class="row">
					@foreach($randomitems as $item)
					@php
          $id=$item->id;
          $codeno=$item->codeno;
					$photo=$item->photo;
					$name=$item->name;
					$subcategoryname=
					$item->subcategory->name;
					$unitprice=$item->price;
					$discount=$item->discount;
          $abv=$item->volume->range;

$region=$item->region->name;

$brand=$item->brand->name;
					@endphp
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset($photo)}});">
								<div class="desc">
									<p class="meta-prod d-flex">
										<a  class="d-flex align-items-center justify-content-center addtocartBtn"
                    href="javascript:void(0)" 
                                                  data-id="{{$id}}"
                                                  data-name="{{$name}}"
                                                  data-codeno="{{$codeno}}"
                                                  data-unitprice="{{$unitprice}}"
                                                  data-discount="{{$discount}}"
                                                  data-photo="{{$photo}}">
                                                    <span class="flaticon-shopping-bag"></span></a>
										
										<a href="javascript:void(0)" class="d-flex align-items-center justify-content-center itemdetail" data-id="{{$id}}"
                                                  data-name="{{$name}}"
                                                  data-abv="{{$abv}}"
                                                  data-region="{{$region}}"
                                                  data-brand="{{$brand}}"
                                                  data-subcategoryname="{{$subcategoryname}}"
                                                
                                                  data-codeno="{{$codeno}}"
                                                  data-unitprice="{{$unitprice}}"
                                                  data-discount="{{$discount}}"
                                                  data-photo="{{$photo}}" 


                                                  ><span class="flaticon-visibility" ></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<!-- <span class="sale">Sale</span> -->
								<span class="category">{{$subcategoryname}}</span>
								<h2> {{$name}}</h2>

								@if($discount)
								<p class="mb-0"><span class="price price-sale text-danger">{{$unitprice}}</span> <span class="price">{{$discount}}</span></p>
								@else
								<span class="price">{{$unitprice}}</span>
								@endif
							</div>
						</div>
					</div>
					@endforeach
					
				
			</div>

		</section>

    <!-- model start -->
      <!-- Button trigger modal -->


  
</x-frontend>