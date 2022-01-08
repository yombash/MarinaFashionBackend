@extends('layouts.app_vertical')

@section('styles')

    <!--Internal  Font Awesome -->
    {{--    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">--}}

    <!--Internal  Bootstrap -->
    {{--    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}

@endsection

@section('breadcrumb')

    {{--    <div class="left-content">--}}
    {{--        <h4 class="content-title mb-1">Контакты</h4>--}}
    {{--        <nav aria-label="breadcrumb">--}}
    {{--            <ol class="breadcrumb">--}}
    {{--                <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>--}}
    {{--                <li class="breadcrumb-item active" aria-current="page">Контакты</li>--}}
    {{--            </ol>--}}
    {{--        </nav>--}}
    {{--    </div>--}}

@endsection('breadcrumb')


@section('content')


    <!-- row -->
    <h4>Контакты</h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body border rounded-10">
                    <label class="main-content-label tx-13 mg-b-20">Отдел продаж</label>
                    <h6>
                        Время работы пн-пт 8:00-17:00 (московское время)
                    </h6>
                    <div class="d-sm-flex row">
                        <div class="mg-sm-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="icon ion-md-phone-portrait"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Основной телефон</span>
                                        <div>
                                            8(4932)93-83-77
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-sm-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="icon ion-logo-whatsapp"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>WhatsApp, Viber, Telegram</span>
                                        <div>
                                            +7(920)362-67-97
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-sm-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
                                        <i class="fe fe-share-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Руководитель</span>
                                        <div>
                                            +7(916)178-6239
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-sm-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fe fe-at-sign"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>E-mail</span>
                                        <div>
                                            Frmf@yandex.ru
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4>Торговые точки</h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body border rounded-10">
                    <h5>
                        г.Иваново, ул.Ермака д.49 корп.1, Ярмарка "Текстильщик", офис 159
                    </h5>
                    <div class="d-sm-flex row">
                        <div class="mg-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="fe fe-watch"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>пн-пт</span>
                                        <div>
                                            7:00-16:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fe fe-watch"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>сб</span>
                                        <div>
                                            8:00-14:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
                                        <i class="fe fe-watch"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>вс</span>
                                        <div>
                                            Выходной
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body border rounded-10">
                    <h5>
                        г.Москва, 14-й км. МКАД, рынок "Садовод", ТК "Садовод", 1 этаж, линия Б пав. 23
                    </h5>
                    <div class="d-sm-flex row">
                        <div class="mg-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="fe fe-watch"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>пн-пт</span>
                                        <div>
                                            5:00-15:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-b-10">
                            <div class="main-profile-contact-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fe fe-watch"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>сб-вс</span>
                                        <div>
                                            6:00-16:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">

    </div>
    <!-- row closed -->

@endsection('content')

@section('scripts')


@endsection
