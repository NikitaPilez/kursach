@extends('base')
@section('content')
    <div class="section" id="pricing">
        <div class="container">
            <h3 class="text-center">Pricing</h3>

            <div class="card-deck popular">
                @foreach($services as $item)
                <div class="col-md-4" style="margin-top: 20px">
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
                            @endforeach
                        </ul>

                        <div class="card-body">
                            <a href="#" data-toggle="modal" services_id="{{$item->id}}" price = "{{$item->price}}" name="{{$item->name}}" data-target="#modalServices" class="btn btn-primary btn-lg btn-block btn-services">Заказать услугу</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

            <!-- // end .pricing -->



           <div class="modal fade" id="modalServices" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="wrap-login100">
                <form class="login100-form validate-form" id="orderForm" method="POST" action="{{asset('/sendOrder')}}">
                    {{csrf_field()}}
                        <span class="login100-form-title p-b-26" id="servicesName" > </span>
                    
                        <span class="login100-form-title p-b-26" id="servicesPrice"> </span>
                   

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="text" id="phoneNumber" placeholder="Введите мобильный телефон" name="phoneNumber">
                      <!--   <span class="focus-input100" data-placeholder="Введите мобильный телефон"></span> -->
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" placeholder="" type="date" id="phoneNumber" name="date">
                    </div>


                    <div class="center">
                        <small><h5 id="error_order"></h5></small>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <a id="sendOrder" class="login100-form-btn" style="cursor:pointer;">
                                Отправить
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
</div>



    </div>
@endsection