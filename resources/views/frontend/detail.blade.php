<x-frontend>

@php 
$id=$item->id;
$name=$item->name;
$photo=$item->photo;
$codeno=$item->codeno;
$unitprice=$item->price;
$discount=$item->discount;

$abv=$item->volume->range;

$region=$item->region->name;

$brand=$item->brand->name;

@endphp

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('logo/brand.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="product.html">Products <i class="fa fa-chevron-right"></i></a></span> <span>Products Single <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products Detail</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    	  <div class="row">
    		

    			<div class="col-lg-8 col-md-8 col-sm-12">

    				<div class="card mb-3" style="max-width: 500px;width: 100%;">
              <div class="row no-gutters">
              <div class="col-md-6">
				      <img src="{{asset($photo)}}" class="card-img pt-3" alt="...">
				    </div>
						    <div class="col-md-6">
						      <div class="card-body">
						        <h3 class="card-title text-center">
						        	{{$name}}
						        </h3>
						        <p class="card-text">
						        	<h6>ABV:<span class="px-3">{{$abv}}</span></h6>		        	
						        	<h5>Region:<span class="px-3">{{$region}}</span></h5>        	
						        	<hr style="opacity: 0.8" class="pt-2">
						        	<h5>Brand:<span class="px-3 text-danger">{{$brand}}</span></h5>
						        	@if($discount)
						        	<h5>Price:
						        		<span class="px-3"><del class="text-danger">{{$unitprice}}</del>&nbsp;{{$discount}}</span> 
						        	@else
						        	<span class="px-3">{{$unitprice}}</span>
						        	</h5>
						        	@endif
						        	<hr style="opacity: 0.8" class="pt-2">

						        	<p><a href="javascript:void(0)" class="btn btn-primary py-3 px-5 mr-2 cartBtn"


                    data-id="{{$id}}"
                    data-name="{{$name}}"
                    data-codeno="{{$codeno}}"
                    data-unitprice="{{$unitprice}}"
                    data-discount="{{$discount}}"
                    data-photo="{{$photo}}"
						        		>Add to Cart</a></p>
						    			





						        </p>
						       
						      </div>
						    </div>
						  </div>
						</div>
    				


    			</div>


    		</div>




    
    	</div>
    </section>

	
</x-frontend>