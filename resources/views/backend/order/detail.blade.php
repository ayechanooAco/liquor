<x-backend>

	@php 
	$voucherno=$orderdetail->vouncherno;
	$orderdate=$orderdetail->orderdate;
	
	$total1=$orderdetail->total;
	$status=$orderdetail->status;
	$note=$orderdetail->note;
	$total=0;
	foreach($orderdetail->items as $order){
	$price=$order->price;
	$total+=$order->pivot->qty;
	}
	@endphp
<main class="app-content">
	<div class="app-title">
		<div>
			<h1> <i class="icofont-list"></i> Orders Details </h1>
		</div>
		<ul class="app-breadcrumb breadcrumb side">
			<a href="{{route('backside.order.index')}}" class="btn btn-outline-primary">
				<i class="icofont-double-left"></i>
			</a>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">

				<div class="tile-body">
					
					<h3>Voucher No :{{$voucherno}} </h3> 
					<h3>Order By:{{$orderdetail->user->name}}</h3>
					<h5>Contact Email:{{$orderdetail->user->email}}</h5>
					<h5>Contact Phone:{{$orderdetail->user->phone}}</h5>
					<h5>Contact Address:{{$orderdetail->user->address}}</h5>
					
					<p>Order Date :{{$orderdate}}</p>
					<p>Total Price :{{$total1}} </p>
					<p>Status :{{$status}} </p>
					<p>Note :   {{$note}}</p>
					<p>Qty :   {{$total}}</p>
					
					
					<hr>
					
				</div>
				
			</div>
		</div>
	</div>
</main>
</x-backend>

