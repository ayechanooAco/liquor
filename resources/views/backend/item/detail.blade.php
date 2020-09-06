<x-backend>
	
	  <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Item Detail</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('backside.item.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    	<h4>{{$item->codeno}}</h4>
                    	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<img src="{{asset($item->photo)}}">
							</div>	
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
				
								<h4> {{$item->name}} </h4>

								

								<p>
									{{$item->description}}
								</p>

								<p> 
									<span class="text-uppercase "> Current Price : </span>
									@if($item->dicount!=null)
									<span class="maincolor ml-3 font-weight-bolder"> {{$item->discount}} Ks </span>
									@else
									<span class="maincolor ml-3 font-weight-bolder"> {{$item->price}} </span>
									@endif
								</p>

								<p> 
									<span class="text-uppercase "> Brand : </span>
									<span class="ml-3"> <a href="" class="text-decoration-none  text-info"> {{$item->brand->name}} </a> </span>
								</p>
								<p> 
									<span class="text-uppercase "> Subcategory </span>
									<span class="ml-3"> <a href="" class="text-decoration-none  text-info"> {{$item->subcategory->name}} </a> </span>
								</p>

								<p> 
									<span class="text-uppercase "> Region </span>
									<span class="ml-3"> <a href="" class="text-decoration-none  text-success"> {{$item->region->name}} </a> </span>
								</p>

								<p> 
									<span class="text-uppercase "> ABV </span>
									<span class="ml-3"> <a href="" class="text-decoration-none  text-danger"> {{$item->volume->range}} </a> </span>
								</p>



								
								
							</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-backend>