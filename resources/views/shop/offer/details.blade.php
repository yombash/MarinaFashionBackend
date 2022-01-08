@extends('layouts.app_vertical')

@section('styles')

{{--    <!--Internal  Font Awesome -->--}}
{{--    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">--}}

{{--    <!--Internal  Bootstrap -->--}}
{{--    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}

    <!--Internal  Nice-select css  -->
    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    <!-- Zoom Plugin -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/Image-Zoom/css/main.css')}}">

@endsection

@section('content')

    <!-- row -->
    <div class="row row-sm">
{{--        <livewire:shop.catalog.filter/>--}}
        <livewire:shop.catalog.offer.details/>
    </div>
    <!-- row -->

@endsection('content')

@section('scripts')


@endsection
