<div class="col-xl-9 col-lg-8">
<div class="row row-sm">

    @forelse ($fashions as $fashion)
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
                            {{$fashion->template->template_group->name}}
                        </span>
                        <span class="btn btn-gray-500 text-muted small mg-l-15 mg-b-5">
                            @if ($fashion->raws->count()>0)
                                {{$fashion->raws->first()->raw_type->name}}
                            @endif
                        </span>
                        {{--                        <span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>--}}
                    </div>
                    <h3 class="btn btn-gray-500 h6 mb-2 font-weight-bold">
                        Модель {{$fashion->template->name}}
                    </h3>
                    <div class="col-xs-2">
                            <label for="price{{$fashion->id}}">Цена</label>
                            <input id="price{{$fashion->id}}" wire:model.lazy="price.{{$fashion->id}}"
                                   wire:change="set_price({{$fashion->id}})"/>
{{--                        {{$price[$fashion->id]}}--}}

                    </div>
                </div>
            </div>
        </div>
    @empty

    @endforelse

</div>
    {{$fashions->links()}}
</div>
