@extends('base')
@section('content')
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                 @foreach($questions as $item)
                <div class="col-md-6">
                    <h4 class="mb-3">{{$item->question}}</h4>
                    <p class="light-font mb-5">{{$item->answer}} </p>
                </div> 
                 @endforeach
            </div>
        </div>
@endsection