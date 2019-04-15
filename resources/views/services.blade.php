@extends('base')
@section('content')
    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <h3>Pricing</h3>
            </div>

            <div class="card-deck popular">
                @foreach($services as $item)
                <div class="col-md-4">
                    <div class="card pricing">
                        <div class="card-head">
                            <small class="text-primary">{{$item->name}}</small>
                            <span class="price">{{$item->price}}$</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($servicesName as $obj)
                            @if($item->id == $obj->services_id)
                            <div class="list-group-item">{{$obj->name}}</div>
                            @endif
                            @endforeach()
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-lg btn-block">Order</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <!-- // end .pricing -->


        </div>

    </div>
@endsection