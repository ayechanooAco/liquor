<x-frontend>
	 <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('logo/back.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          
            <h2 class="mb-0 bread">{{$volumes->range}}</h2>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all" style="background-color:gray;" >
                            <i class="fa fa-bars"></i>
                            <span>All Brand</span>
                        </div>
                        <ul>
                            @foreach($data[0] as $brand)
                           <i class="icofont-square-right"></i><a href="{{route('brand',$brand->id)}}" style="color: black">{{$brand->name}}</a><br>
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
							@foreach($volumeitems as $volumeitem)
							@php
							$id=$volumeitem->id;
							$codeno=$volumeitem->codeno;
							$name=$volumeitem->name;
							$photo=$volumeitem->photo;
							$unitprice=$volumeitem->price;
							$discount=$volumeitem->discount;
							$abv=$volumeitem->volume->range;
							$brand=$volumeitem->brand->name;
							$region=$volumeitem->region->name;
							$subcategoryname=$volumeitem->subcategory->name;


							
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
		          
		              {!!$volumeitems->links()!!}
		           
		        </div>
					</div>

				</div>
			</div>
		</section>
		
</x-frontend>