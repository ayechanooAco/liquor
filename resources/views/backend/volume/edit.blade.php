<x-backend>
    
     @php
    $id=$volume->id;
    $range=$volume->range;
   
    @endphp


     <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> ABV Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.volume.index')}}" class="btn btn-outline-primary">
                        <i class="icofont-double-left icofont-1x"></i>
                    </a>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{route('backside.volume.update',$id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                    <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Range </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="range" value="{{$range}}">
                                     <div class="text-danger form-control-feedback">
                                           {{$errors->first('range')}}
                                      </div>


                                </div>
                            </div>
                           
                        </div>
                    </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                    <i class="icofont-save"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-backend>