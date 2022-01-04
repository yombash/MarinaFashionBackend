@extends('layouts.customapp')

@section('custom-styles')
@endsection

@section('content')

                <div class="p-5 wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Добро пожаловать!</h2>
                        <h4>Форма входа в личный кабинет</h4>
                        <form action="{{url('index')}}">
                            <div class="form-group">
                                <label>Email</label><input class="form-control" placeholder="Enter your email" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label>Пароль</label> <input class="form-control" placeholder="Enter your password"
                                                        type="password" value="">
                            </div><button class="btn btn-main-primary btn-block">Войти</button>
                        </form>
                    </div>
                    <div class="main-signin-footer mt-3 mg-t-5">
                        <p><a href="">Забыли пароль?</a></p>
                        <p>Ещё нет аккаунта? <a href="{{route('shop.auth.create')}}">Создать аккаунт</a></p>
                        <p><a href="{{route('shop.index')}}">Вернуться на сайт без авторизации?</a></p>
                    </div>
                </div>


@endsection('content')

@section('custom-scripts')

@endsection
