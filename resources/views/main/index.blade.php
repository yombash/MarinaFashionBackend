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
    {{--                <li class="breadcrumb-item active" aria-current="page">Profile</li>--}}
    {{--            </ol>--}}
    {{--        </nav>--}}
    {{--    </div>--}}

@endsection('breadcrumb')


@section('content')
    <!-- row -->
    <h4>Халаты и сарафаны оптом</h4>
    <div class="d-block d-sm-block d-md-none text-center mg-b-10">
        <button class="btn btn-primary" onclick="javascript:open_burger();"> Перейти в каталог <i class="fe
        fe-align-left"></i></button>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body border rounded-10">
                    <h6 class="text-center">Уважаемые клиенты!</h6>
                    <div class="main-profile-bio">
                        <span class="mg-l-20">
                        Мы предлагаем Вашему вниманию трикотажные изделия от производителя Marina. На нашем сайте Вы можете приобрести <b>оптом халаты и сарафаны</b> по низким ценам! В нашем каталоге Вы можете найти и купить оптом:
                        </span>
                        <livewire:main.index.templates-list/>
                    </div>
                    <div class="main-profile-bio">
                        <span class="mg-l-20">
                        <b>«Marinafashion»</b>: безупречное качество пошива, передовые технологии, модные трикотажные изделия на любой, даже самый притязательный вкус Вы можете приобрести у нас по самым низким ценам!
                        </span>
                    </div>
                    <div class="main-profile-bio first-letter">
                        <span class="mg-l-20">Для наших покупателей – всегда качественная продукция самых разных,
                            актуальных моделей
                             домашней одежды из трикотажа. Нашей трикотажной одеждой можно быстро и недорого
                            пополнить женский гардероб — тут и туники, и модные платья, удобные халаты, мягкие
                            пижамы, красивые сарафаны, ночные сорочки и многое другое.</span>
                    </div>
                    <div class="main-profile-bio first-letter">
                        <span class="mg-l-20">Милые дамы, мы заботимся о Вас!!! Ивановский трикотаж от производителя Marina подарит комфорт и уют зимой. Летние же модели порадуют легкостью, прохладой, яркие и актуальные модели помогут Вам произвести неизгладимое впечатление на любимых.</span>
                    </div>
                    <h6 class="text-center">Удачных Вам покупок!</h6>
                    <hr class="mg-y-30">
                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Производство трикотажных изделий для дома (халаты, туники), дачи (сарафаны), сна (сорочки, пижамы) и отдыха (костюмы)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Все представленные трикотажные изделия по оптовым ценам!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        На весь ассортимент трикотажных изделий имеются декларации и сертификаты соответствия
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Мы обеспечиваем индивидуальный подход и оптимальные условия каждому клиенту для успешного и длительного сотрудничества
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Мы приглашаем к сотрудничеству оптовых и мелкооптовых покупателей
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Доставка товара осуществляется как самовывозом, так и доставкой в регионы с использованием грузовых авто и ж/д компаний
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Форма оплаты любая
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mg-sm-r-20 mg-b-10">
                        <div class="main-profile-contact-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="fe fe-thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Возможен пошив трикотажных изделий по вашим индивидуальным заказам
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection('content')

@section('scripts')
    <script>
        function open_burger() {
            $('body').addClass('sidenav-toggled');
        }
    </script>

@endsection
