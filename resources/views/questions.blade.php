@extends('base')
@section('content')
        <div class="container">
            <div class="section-title" style="margin-top: 30px">
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                 @foreach($questions as $item)
                <div class="col-md-6">
                    <h3 class="mb-3">{{$item->question}}</h3>
                    <h4 class="light-font mb-5 color-default">{{$item->answer}} </h4>
                    <h4 class="light-font mb-5 color-default">{{$item->date}} </p>
                </div> 
                 @endforeach
            </div>
            <div class="card-body">
                <div class="col-md-12">
                     <a href="#" data-toggle="modal" data-target="#modalQuestion" class="btn btn-primary btn-lg btn-block">Задать вопрос</a>
                </div>
            </div>
        </div>

           <div class="modal fade" id="modalQuestion" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{asset('/sendQuestion')}}">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-26">
                        Задайте свой вопрос
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="question">
                        <span class="focus-input100" data-placeholder="Question"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="text" name="comment">
                        <span class="focus-input100" data-placeholder="Comment"></span>
                    </div>

                    <div class="center">
                        <h5></h5>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Отправить
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection