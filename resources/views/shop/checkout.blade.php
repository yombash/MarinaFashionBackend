@extends('layouts.app')

@section('styles')

    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection


@section('content')

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Форма завершения оформления заказа
                    </div>
                    <p class="mg-b-20 card-sub-title tx-12 text-muted">Пожалуйста, проверьте Ваш заказ и заполните
                        данные для отгрузки и оплаты</p>
                    <div id="wizard1">
                        <h3>Состав заказа</h3>
                        <livewire:shop.checkout.basket/>
                        <h3>Контактные данные</h3>
                        <livewire:shop.checkout.shipping/>
                        <h3>Метод оплаты</h3>
                        <livewire:shop.checkout.payment/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->



@endsection('content')

@section('scripts')
    <!--Internal  Select2 js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Internal Jquery.steps js -->
    <script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!--Internal  Form-wizard js -->
    <script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>

@endsection
