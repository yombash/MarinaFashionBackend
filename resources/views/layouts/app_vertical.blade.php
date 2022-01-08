<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

    <!-- Title -->
    <title> Marina -- Халаты и туники оптом </title>

    @include('layouts.verticalmenu.styles')
    @livewireStyles
</head>

<body  class="main-body light-theme app sidebar-mini active leftmenu-color">

<!-- Loader -->
<div id="global-loader">
    <img src="{{URL::asset('assets/img/loader-2.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

@include('layouts.verticalmenu.main-sidebar')

<!-- main-content -->
<div class="main-content app-content">

@include('layouts.verticalmenu.main-header')

<!-- container -->
    <div class="container-fluid mg-t-20">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">

            @yield('breadcrumb')

        </div>
        <!-- breadcrumb -->
        <livewire:shop.catalog.search/>
        @yield('content')

    </div>
    <!-- Container closed -->

</div>
<!-- main-content closed -->

@include('layouts.verticalmenu.sidebar-right')

@yield('modals')

@include('layouts.verticalmenu.footer')

@include('layouts.verticalmenu.scripts')
@livewireScripts
</body>
</html>
