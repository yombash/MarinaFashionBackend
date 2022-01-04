<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
    <div class="product-card card overflow-hidden container-fluid">
        <div class="img-wrap">
            {{--            @dd($fashion)--}}
            <a href="{{
    route('shop.offer.details',
    [
        'template_id'=>$template->id,
        'fashion_index'=>$fashion_index
        ]
        )
        }}"> <img src=" @if ($fashion->media->count()>0)
                {{$fashion->media->first()->getUrl()}}
                @endif" class="img-responsive"/></a>
            <h1 class="offer-overlay">
                <div class="ql-color-red">
                    <span title="Название модели">{{$template->name}}</span> {{$template->template_group->name}}
                </div>

            </h1>
            <h2 class="offer-overlay">
                <div class="ql-color-red">
                    <span title="Название модели">
                        @if (!empty($raw_name))
                            <div class="text-muted">
                                {{$raw_name}}
                            </div>
                        @endif
                        @if ($mult>0)
                            <div class="text-muted">Размеры:
                {{$mult}}
                            </div>
                @endif


            </h2>
            <h3>
                <span class="tx-15 ml-auto">
                    <i class="ion ion-md-star text-warning"></i>
                    <i class="ion ion-md-star text-warning"></i>
                    <i class="ion ion-md-star text-warning"></i>
                    <i class="ion ion-md-star-half text-warning"></i>
                    <i class="ion ion-md-star-outline text-warning"></i>
                </span>
            </h3>

            @if(basket()->getCurrentQty($fashion->id) == 0)
                <button wire:click="basket_add({{$fashion->id}})" class="btn btn-primary btn-block mb-0 mt-4">
                    <i class="fe fe-shopping-cart mr-1"></i>
                    Добавить в корзину
                </button>
            @else
                <button wire:click="basket_add({{$fashion->id}})" class="btn btn-success btn-block mb-0 mt-4">
                    <i class="fe fe-shopping-cart mr-1"></i>
                    Уже в корзине {{basket()->getCurrentQty($fashion->id)}}шт.
                </button>
            @endif
        </div>

        {{--        <a href="" wire:click.prevent="show_modal_product_details({{$template->id}})">--}}
        {{--            <img class="w-100 mt-0" src="--}}

        {{--                                                " alt="product-image"/>--}}
        {{--        </a>--}}
        <div class="card-body text-right">
            <div class="d-flex">
                <h4 class="h5 w-50 font-weight-bold
											text-danger">{{$price}} руб.
                    {{--                                                <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span>--}}
                </h4>

            </div>

            <div class="row">
                @if($template->fashions->count()>1)
                    @foreach($template->fashions as $i => $u)
                        <div class="col-4 col-md-4">
                            @if ($i != $fashion_index)
                                <a href="#" wire:click.prevent="choose_fashion({{$i}})">
                                    <img alt="Responsive image"
                                         src="{{$u->media->first()->getUrl('thumb')}}"
                                    />
                                </a>
                            @else
                                <img alt="Responsive image"
                                     style="border: 1px solid red;"
                                     src="{{$u->media->first()->getUrl('thumb')}}"
                                />
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        {{--                        <div class="card-footer">--}}

        {{--                        </div>--}}
    </div>
</div>
