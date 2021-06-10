@extends('layouts.admin')

@section('styles')

    <!--Internal  Font Awesome -->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!--Internal  Bootstrap -->
    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Internal  treeview -->
    <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('breadcrumb')
    <div class="left-content">
        <h4 class="content-title mb-2">Администрирование сайта</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Список сырья</li>
            </ol>
        </nav>
    </div>

@endsection('breadcrumb')

@section('content')

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Сырьё для производства
                    </div>
                    <p class="mg-b-20 card-sub-title tx-12 text-muted">Заполните, пожалуйста, список видов сырья</p>
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4">
                                <livewire:admin.crud.raw-types/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- row -->

@endsection('content')

@section('scripts')

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- Internal Treeview js -->
    <script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>

@endsection
