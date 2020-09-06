<x-frontend>
	 <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('logo/brand.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
         
            <h2 class="mb-0 bread">{{$brands->name}}</h2>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Brand</span>
                        </div>
                        <ul>
                            @foreach($data[0] as $brand)
                            <li><a href="{{route('brand',$brand->id)}}">{{$brand->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>


					<div class="col-md-9">
						<div class="row mb-4">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								
							</div>
						</div>
						<div class="row random">
							@foreach($branditems as $branditem)
							@php
							$id=$branditem->id;
							$codeno=$branditem->codeno;
							$name=$branditem->name;
							$photo=$branditem->photo;
							$unitprice=$branditem->price;
							$discount=$branditem->discount;

							$abv=$branditem->volume->range;
							$region=$branditem->region->name;
							$brand=$branditem->brand->name;
							$subcategoryname=$branditem->subcategory->name;


							
							@endphp
							<div class="col-md-4 d-flex">
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
										<span>{{$subcategoryname}}</span>
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


						<div class="row mt-5" style="float: left;">
		          
		              {!!$branditems->links()!!}
		           
		        </div>
					</div>

				</div>
			</div>
		</section>
		
</x-frontend>