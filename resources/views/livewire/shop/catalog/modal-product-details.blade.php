<div class="modal-body">
    @if ($templateId>0)
        <div class="col-xl-9 col-lg-8">
            <div class="row row-sm">

                @forelse ($template->fashions as $fashion)
                    @if($fashion->items->first()->products->first()->prices->first()->value >0)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="product-card card overflow-hidden">
                                <img class="w-100 mt-0" src="
                    @if ($fashion->media->count()>0)
                                {{$fashion->media->first()->getUrl()}}
                                @endif
                                    " alt="product-image"/>
                                <div class="card-body h-100">
                                    <div class="d-flex">
                        <span class="btn btn-gray-500 text-muted small mg-b-5">
                            {{$template->template_group->name}}
                        </span>
                                        <span class="btn btn-gray-500 text-muted small mg-l-15 mg-b-5">
                            @if ($fashion->raws->count()>0)
                                                {{$fashion->raws->first()->raw_type->name}}
                                            @endif
                        </span>
                                        {{--                            <span class="ml-auto"><i class="fa fa-heart text-danger">1000р.</i></span>--}}
                                        {{--                        <span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>--}}
                                    </div>
                                    <button class="btn btn-gray-500 h6
                        mb-2
                        font-weight-bold">
                                        Модель {{$template->name}}
                                    </button>
                                    <div class="d-flex">
                                        <h4 class="h5 w-50 font-weight-bold
											text-danger">{{$fashion->items->first()->products
											->first()->prices->first()->value}} руб.
                                            {{--                                                <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span>--}}
                                        </h4>
                                        <span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
                                    </div>
                                    <button class="btn btn-primary btn-block mb-0 mt-4"
                                            wire:click="put_to_basket({{$fashion->id}})">
                                        <i class="fe fe-shopping-cart mr-1"></i>
                                        В корзину
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty

                @endforelse
            </div>
        </div>
    @endif
</div>
