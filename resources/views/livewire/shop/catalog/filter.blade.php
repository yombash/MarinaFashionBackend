<div class="col-xl-3 col-lg-4 mb-3 mb-md-0">
    {{--Поиск--}}
    <livewire:shop.catalog.search/>

    {{--Категории--}}
    <div class="card overflow-hidden collapsed-item d-none d-sm-block">
        <h5 class="m-0 p-3 card-title bg-white border-bottom collapse-element-title collapsed"
            data-toggle="collapse" data-target="#categories"
        >Категории</h5>
        <div class="py-2 px-3 item-description" id="categories">
            @forelse ($categories as $item)
                <label class="p-1 mt-2 d-flex align-items-center">
                    <span class="ml-2 @if(
    (request()->get('filter')['категория'] ?? '') == $item->name
                        )
                        font-weight-bold
@endif">
                        <a href="?filter[категория]={{$item->name}}">
										{{$item->name}}
                        </a>
                    </span>
                </label>
            @empty
                -
            @endforelse
        </div>
    </div>

    {{--Материалы--}}
    <div class="card overflow-hidden d-none d-sm-block">
        <h5 class="m-0 p-3 card-title bg-white border-bottom">Материалы</h5>
        <div class="py-2 px-3">
            @forelse ($raw_types as $item)
                <label class="p-1 mt-2 d-flex align-items-center">
                    <span class="ml-2 @if(
    (request()->get('filter')['материал'] ?? '') == $item->name
                        )
                        font-weight-bold
@endif">
                        <a href="?filter[материал]={{$item->name}}">
										{{$item->name}}
                        </a>
									</span>
                </label>
            @empty
                -
            @endforelse
        </div>
    </div>

    <div class="card overflow-hidden d-none d-sm-block">
        <h5 class="m-0 p-3 card-title bg-white border-bottom">Виды продукции</h5>
        <div class="py-2 px-3">
            @forelse ($template_groups as $item)
                <label class="p-1 mt-2 d-flex align-items-center">
                    <span class="ml-2 @if(
    (request()->get('filter')['вид-продукции'] ?? '') == $item->name
    &&  (request()->get('filter')['тип'] ?? '') == $item->gender->name
                        )
                        font-weight-bold
@endif">
                        <a href="{{route('shop.index',[
                            'filter'=> [
                                'вид-продукции' => $item->name,
                                'тип'=> $item->gender->name
                            ]
                        ]
                        )}}">
										{{$item->name}}
                            @if($item->gender->name != "Женская одежда")
                                ({{$item->gender->name}})
                            @endif
                        </a>
									</span>
                </label>
            @empty
                -
            @endforelse
        </div>
    </div>
</div>
