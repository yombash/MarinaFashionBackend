<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Marina - трикотажные изделия высокого качества. Мы готовы предложить Вам платья оптом, сарафаны, туники, халаты, пижамы, сорочки и другие трикотажные изделия по низким ценам.">
    <meta name="Author" content="MarinaFashion">
    <meta name="Keywords" content="платья оптом, сарафаны оптом,  трикотаж оптом, сорочки оптом, халаты оптом"/>

    <!-- Title -->
    <title>Халаты оптом от производителя MarinaFashion </title>

    @include('layouts.horizontalmenu.styles')
    @livewireStyles
</head>

<body class="main-body light-theme horizontal-color header-light">

<!-- Loader -->
<div id="global-loader">
    <img src="{{URL::asset('assets/img/loader-2.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

{{--@include('layouts.horizontalmenu.main-header')--}}

@include('layouts.horizontalmenu.horizontal-main')

<!-- main-content opened -->
<div class="main-content horizontal-content">

    <!-- container opened -->
    <div class="container">

        <!-- breadcrumb -->
{{--        <div class="breadcrumb-header justify-content-between mg-lg-t-0 mg-lg-b-50">--}}

{{--            @yield('breadcrumb')--}}

{{--        </div>--}}
        <!-- breadcrumb -->

        @yield('content')

    </div>
    <!-- Container closed -->

</div>
<!-- main-content closed -->

@include('layouts.horizontalmenu.sidebar-right')

@yield('modals')

@include('layouts.horizontalmenu.footer')

@include('layouts.horizontalmenu.scripts')
@livewireScripts
</body>
</html>
