@extends('layouts.app')

@section('styles')

    <!-- Internal Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection


@section('content')

    <!-- row opened -->
    <div class="row">
        <div class="col-xl-7 col-lg-7">
            <div class="card">
                <div class="card-header border-bottom py-3 d-sm-flex align-items-center">
                    <h4 class="card-title">
                        Состав корзины
                    </h4>
                    <div class="ml-auto card-options">
                        <div class="d-flex mg-t-10 mg-sm-t-0">
                            <div class="font-weight-bold mg-r-10 mg-t-10">
                                {{--                                <livewire:shop.cart.basket-button/>--}}
                                <livewire:shop.cart.clear-button/>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                @forelse(basket()->all() as $fashion_id => $item)
                    <livewire:shop.cart.basket-item
                        :fashion-id=$fashion_id
                        :qty="$item['qty']"
                        :price="$item['price']"
                        :mult="$item['mult']"
                    />
                @empty
                    Корзина пуста
                @endforelse
                {{--                <div class="card-footer text-right">--}}
                {{--                    @if(basket()->countItems()>0)--}}
                {{--                        <button class="btn btn-secondary float-left mt-2 m-b-20 "--}}
                {{--                                type="submit"--}}
                {{--                                value="Proceed To--}}
                {{--                    Checkout">Перейти к оформлению--}}
                {{--                        </button>--}}
                {{--                    @endif--}}
                {{--                    <a href="{{route("shop.index")}}">--}}
                {{--                        <button class="btn btn-success mt-2 float-right" type="submit"--}}
                {{--                                value="Continue--}}
                {{--                    Shopping">Продолжить покупки--}}
                {{--                        </button>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
            </div>
        </div>
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-header pd-y-20 border-bottom">
                    <div class="card-title mb-0">Сумма корзины
                        <livewire:shop.cart.basket-button/>
                    </div>
                    <button class="btn btn-success mt-2 float-right "
                            type="submit"
                            value="Continue Shopping">
                        <a href="{{url(route('shop.index'))}}" class="text-white">
                            Продолжить покупки
                        </a>
                    </button>
                </div>
                {{--                <div class="card-body">--}}
                {{--                                        <div class="row mb-4">--}}
                {{--                                            <div class="col-6"><input class="productcart form-control" type="text"--}}
                {{--                                                                      placeholder="Coupon Code"></div>--}}
                {{--                                            <div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply</a></div>--}}
                {{--                                        </div>--}}
                    <livewire:shop.checkout.shipping/>
                    {{--                        <table class="table table-bordered">--}}
                    {{--                            <tbody>--}}
                    {{--                            <tr>--}}
                    {{--                                <td>Подытог</td>--}}
                    {{--                                <td class="text-right"></td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td><span>Итог</span></td>--}}
                    {{--                                <td class="text-right text-muted"><span>$792.00</span></td>--}}
                    {{--                            </tr>--}}
                    {{--                            <tr>--}}
                    {{--                                <td><span>Сумма к оплате</span></td>--}}
                    {{--                                <td><h2 class="price text-right mb-0">$792.00</h2></td>--}}
                    {{--                            </tr>--}}
                    {{--                            </tbody>--}}
                    {{--                        </table>--}}
                <form class="text-center">



                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- row closed -->

@endsection('content')

@section('scripts')

    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>

@endsection
