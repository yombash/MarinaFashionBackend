@extends('layouts.admin')

@section('styles')

    <!--Internal  Font Awesome -->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!--Internal  Bootstrap -->
    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
    <div class="left-content">
        <h4 class="content-title mb-2">Администрирование сайта</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Прайс-лист интернет-магазина (оптовый)</li>
            </ol>
        </nav>
    </div>

@endsection('breadcrumb')

@section('content')

    <!-- row -->
    <div class="row row-sm">
        <livewire:admin.crud.price.filter/>
        <livewire:admin.crud.price.web/>
    </div>
    <!-- row -->

@endsection('content')

@section('scripts')


@endsection
