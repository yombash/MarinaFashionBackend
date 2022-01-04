<div class="card-body">
    @if($fashionId>0)
        <div class="media">
            <div class="card-aside-img">
                <a
{{--                    href="{{--}}
{{--    route('shop.offer.details',--}}
{{--    [--}}
{{--        'template_id'=>$template->id,--}}
{{--        'fashion_index'=>$fashion_index--}}
{{--        ]--}}
{{--        )--}}
{{--        }}"--}}
                > <img src="@if ($fashion->media->count()>0)
                {{$fashion->media->first()->getUrl('thumb')}}
                @endif
                    " alt="img" class="wd-100-f ht-100 mr-4">
                </a>
                <div class="d-flex mg-t-10">
                    <a wire:click.prevent="minus" class="tx-24 mg-t-5" href="#"><i class="fe fe-minus-circle"></i></a>
                    <input wire:model.lazy="qty" type="text" class="form-control
                form-control-sm
                text-center
                wd-50 mg-x-5"
                           placeholder="1">
                    <a wire:click.prevent="plus" class="tx-24 mg-t-5" href="#"><i class="fe fe-plus-circle"></i></a>
                </div>
                @if($qty>0)
                <div class="mg-t-10 h5 font-weight-bold text-danger">
                     <center> {{rub($qty * $price * $mult)}}</center>
                </div>
                @endif
            </div>
            <div class="media-body">
                <div class="card-item-desc mt-0">
                    <h6 class="font-weight-semibold mt-0 text-uppercase">{{$fashion->template->name}}
                        {{$fashion->template->template_group->name}}</h6>
                    <small class="text-muted tx-13">{{$fashion->raws->first()->raw_type->name}}</small>
                    <p class="tx-13 mg-b-5">@if ($fashion->items->count()>0)
                        <div class="text-muted">Размеры:
                            {{$fashion->items->count()}}
                        </div>
                        @endif</p>
                        <div class="d-flex">
                            <h4 class="h5 w-50 font-weight-bold text-danger" nowrap>{{$this->price * $this->mult}}
                                руб. =
                                <br>{{rub($this->price)}}/шт.
                                @if($this->mult>1) <br> x {{$this->mult}} [кол-во размеров]@endif
                                {{--                        <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span>--}}
                            </h4>
                        </div>
                        {{--                <a class="tx-gray-900 tx-uppercase font-weight-bold mg-r-10" href="#">Save For Later</a>--}}
                        @if($qty>0)
                        <a wire:click.prevent="remove" class="tx-gray-900 tx-uppercase font-weight-bold" href="#">Удалить</a>
                        @else
                            Товар был удалён из корзины
                            <button wire:click="basket_add({{$fashionId}})" class="btn btn-primary btn-block mb-0 mt-4">
                                <i class="fe fe-shopping-cart mr-1"></i>
                                Снова добавить в корзину
                            </button>
                        @endif
                </div>
            </div>
        </div>
    @endif
</div>
