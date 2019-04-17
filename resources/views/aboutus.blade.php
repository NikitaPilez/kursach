@extends('base')
@section('content')

 <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <h3>Do more with our app</h3>
            </div>

            <div class="tab-pane fade show active">
                @php
                $tmp = 0;
                @endphp
                @foreach($aboutus as $item)
                <div class="d-flex flex-column flex-lg-row">
                    @if($tmp %2 == 0)
                    <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    <div>
                        <h2>{{$item->title}}</h2>
                        <p class="lead">{{$item->header}} </p>
                        <p>{{$item->description}}
                        </p>
                    </div>
                    @else
                        <div>
                            <h2>{{$item->title}}</h2>
                            <p class="lead">{{$item->header}} </p>
                            <p>{{$item->description}}</p>
                        </div>
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    @endif
                </div>
                @php
                  $tmp++;
                @endphp
                @endforeach

            </div>
        </div>
    </div>
    
@endsection