<x-frontend>
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

	<section class="hero-wrap hero-wrap-2" style="background-color: #121212;" data-stellar-background-ratio="0.1">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-between">
         
            <h2 class="mb-0 ">Order Voucher No:{{$voucherno}}</h2>
            <h2 class="mb-0 ">Order Date :{{Carbon\Carbon::parse($order->created_at)->isoFormat('MMM Do Y, h:mm:ss A')}}</h2>
          </div>
        </div>
      </div>
    </section>
</x-frontend>