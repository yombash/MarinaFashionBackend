@extends('layouts.app_vertical')

@section('styles')

    <!--Internal  Font Awesome -->
{{--    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">--}}

    <!--Internal  Bootstrap -->
{{--    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}

@endsection


@section('content')

    <!-- row -->
    <div class="row row-sm">
{{--        <livewire:shop.catalog.filter/>--}}
        <livewire:shop.catalog.offers/>
    </div>
    <!-- row -->

@endsection('content')

@section('scripts')


@endsection
