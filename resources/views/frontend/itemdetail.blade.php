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
	<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Itemdetail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Brand:{{$brand}}<br>
        Subcategory:{{$name}}<br>
    	ABV:{{$abv}}<br>
		Region:{{$region}}<br>
			@if($discount)
			<h5>Price:
				<span class="px-3"><del class="text-danger">{{$unitprice}}</del>&nbsp;{{$discount}}</span> 
			@else
			<span class="px-3">{{$unitprice}}</span>
			</h5>
			@endif</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="javascript:void(0)" class="btn btn-primary py-3 px-5 mr-2 cartBtn"


                    data-id="{{$id}}"
                    data-name="{{$name}}"
                    data-codeno="{{$codeno}}"
                    data-unitprice="{{$unitprice}}"
                    data-discount="{{$discount}}"
                    data-photo="{{$photo}}"></a>Add to Cart</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</x-frontend>