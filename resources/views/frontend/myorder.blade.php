<x-frontend>
	<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('logo/brand.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
         
            <h2 class="mb-0 bread">My Order List</h2>
          </div>
        </div>
      </div>
    </section>
	<div class="col-md-6 offset-md-2">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Codeno</th>
		      <th scope="col">OrderDate</th>
		      <th scope="col">Total</th>
		      <th scope="col">Status</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  

		
		  <tbody>
		  	@php $i=1; @endphp
		  	@foreach($orders as $order)
		    <tr>
		      <th scope="row">{{$i++}}</th>
		      <td>{{$order->vouncherno}}</td>
		      <td>{{Carbon\Carbon::parse($order->created_at)->isoFormat('MMM Do Y, h:mm:ss A')}}</td>
		      <td>{{$order->total}}K</td>
		      <td>{{$order->status}}</td>
		      <td>
		      		<a class="btn btn-info text-white" href="{{route('orderDetail',$order->id)}}">Detail</a>
		      </td>

		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</x-frontend>