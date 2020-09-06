<x-frontend>
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('logo/back.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
			
					<div class="accordion" id="accordionExample">
					  <div class="card">
					    <div class="card-header" id="headingOne">
					      <h2 class="mb-0">
					        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="brandBtn">
					          <h4>Brands</h4>
					        </button>
					      </h2>
					    </div>

					    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					      <div class="card-body">
					      	 <ul>
					      	@foreach($brands as $brand)
					      	@php

					      	$id=$brand->id;
					      	$name=$brand->name;

					      	@endphp
					         <li>	
				                    <a href="{{route('showbrand',$id)}}" style="text-decoration: none;color: black;">
				                        <i class="app-menu__icon icofont-tags"></i>
				                        <span class="app-menu__label">
				                            {{$name}}
				                        </span>
				                    </a>
				                </li>
					        @endforeach
					        </ul>
					         
					      </div>
					    </div>
					    </div>
					    <div class="card">
					      <div class="card-header" id="headingTwo">
					        <h2 class="mb-0">
					          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="abvBtn">
					            <h4> ABV</h4>
					          </button>
					        </h2>
					      </div>
					      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					        <div class="card-body">

					        @foreach($volumes as $volume)
					        @php
					        	$id=$volume->id;
					        	$range=$volume->range;
					         @endphp
					            <li>	
				                    <a href="{{route('volume',$id)}}" style="text-decoration: none;color: black;">
				                        <i class="app-menu__icon icofont-tags"></i>
				                        <span class="app-menu__label">
				                            {{$range}}
				                        </span>
				                    </a>
				                </li>
					         @endforeach 
					        </div>
					      </div>
					    </div>
					    <div class="card">
					      <div class="card-header" id="headingThree">
					        <h2 class="mb-0">
					          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="regionBtn" >
					            <h4> Country of origin</h4>
					          </button>
					        </h2>
					      </div>
					      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					        <div class="card-body">
					        @foreach($regions as $region)
					        @php 
					        $id=$region->id;
					        $name=$region->name;
					        @endphp
					           <li>	
				                    <a href="{{route('region',$id)}}" style="text-decoration: none;color: black;">
				                        <i class="app-menu__icon icofont-tags"></i>
				                        <span class="app-menu__label">
				                            {{$name}}
				                        </span>
				                    </a>
				                </li>
					        @endforeach  

					        </div>
					      </div>
					    </div>
					  </div>
					</div>


					<div class="col-md-9">
						<div class="row mb-4">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								
							</div>
						</div>
						<div class="row random">
							@foreach($randomitems as $randomitem)
							@php
							$id=$randomitem->id;
							$name=$randomitem->name;
							$photo=$randomitem->photo;
							$unitprice=$randomitem->price;
							$discount=$randomitem->discount;
							$subcategoryname=$randomitem->subcategory->name;


							 @endphp
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url({{asset($photo)}});">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												
												<a href="{{route('detail',$id)}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										<span class="category">{{$subcategoryname}}</span>
										<h2>{{$name}}</h2>
										@if($discount)
										
										<del class="text-danger">{{$unitprice}}</del>
										<span class="price">{{$discount}}</span>
										@else

										<span class="price">{{$unitprice}}</span>

										@endif

									</div>
								</div>
							</div>
							@endforeach
						</div>


						<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
					</div>

				</div>
			</div>
		</section>
</x-frontend>