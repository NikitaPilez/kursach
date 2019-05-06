@extends('base')
@section('content')
 
<div class="light-bg py-5 text-center" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> {{$settings->address}}</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">{{$settings->email}}</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">{{$settings->phone}}</a>
                        </p>
                    </div>

                </div>
                    </div>

        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9402.731876017391!2d27.540485859055067!3d53.90183864015871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfebe68e0203%3A0x7b59184b5d72f463!2z0YPQu9C40YbQsCDQndC10LzQuNCz0LAgNSwg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1557130937347!5m2!1sru!2sby" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

@endsection