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
                    <p class="light-font mb-5">{{$item->date}} </p>
                </div> 
                 @endforeach
            </div>
            <a data-toggle="modal" data-target="#modalQuestion">Вызвать модальное окно</a>
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

                    <<div class="wrap-input100 validate-input" method="POST" action="{{asset('/sendQuestion')}}">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="text" name="comment">
                        <span class="focus-input100" data-placeholder="Comment"></span>
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