@extends('base')
@section('content')
    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>PRICING</small>
                <h3>Upgrade to Pro</h3>
            </div>

            <div class="card-deck">
                @foreach($services as $item)
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">{{$item->name}}</small>
                        <span class="price">{{$item->price}}<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($servicesname as $object)
                        @if ($item->id === $object->services_id)
                        <div class="list-group-item">{{$object->name}}</div>
                        @endif
                        @endforeach

                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
@endsection