
<x-backend>
 <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Order </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                             @if(session('successMsg')!=null)
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>😇Congulations  </strong>
                                    {{session('successMsg')}}
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            
                        </div>
                        @endif
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Date</th>
                                          <th>Voucherno</th>
                                          <th>Customer</th>
                                          <th>Total</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1 @endphp
                                       @foreach($order as $order)
                                        @php $id=$order->id;@endphp

                                        <tr>
                                            <td> {{$i++}} .</td>
                                            <td>{{$order->orderdate}}</td>
                                            <td>{{$order->vouncherno}}</td>
                                            <td>{{$order->total}}</td>
                                            <td>{{$order->user->name}}</td>
                                            <td>{{$order->status}}</td>
                                            <td>

                                                  <a href="
                                              {{route('backside.order.show',$id)}}" 
                                              class="btn btn-info">
                                                    <i class="icofont-info-square"></i>
                                                </a>


                                                <a href="javascript:void(0)" class="btn btn-success confirmBtn"
                                                data-id="{{$id}}"

                                                >
                                                    <i class="icofont-check"></i></i>
                                                </a>


                                                 <a href="javascript:void(0)" class="btn btn-warning cancelBtn"
                                                data-id="{{$id}}"

                                                >
                                                    <i class="icofont-delete"></i>
                                                </a>

                                                 <form action="{{route('backside.order.destroy',$order->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                <button class="btn btn-outline-danger" type="submit">
                                                     <i class="icofont-close icofont-1x"></i>
                                                 </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-backend>
