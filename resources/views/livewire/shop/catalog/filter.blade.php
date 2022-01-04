<div class="col-xl-3 col-lg-4 mb-3 mb-md-0">
    <div class="card overflow-hidden">
        <h5 class="m-0 p-3 card-title bg-white border-bottom">Поиск</h5>
        <div class="py-3 px-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Искать ...">
                <span class="input-group-append">
										<button class="btn btn-primary" type="button">Искать</button>
									</span>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        <h5 class="m-0 p-3 card-title bg-white border-bottom">Категории</h5>
        <div class="py-2 px-3">
            @forelse ($template_groups as $template_group)
                <label class="p-1 mt-2 d-flex align-items-center">
                    {{--									<span class="checkbox">--}}
                    {{--										<span class="check-box mb-0">--}}
                    {{--											<span class="ckbox">--}}
                    {{--                                                <input wire:model="checkbox.template_group.{{$template_group->id}}"--}}
                    {{--                                                       checked="--}}
                    {{--                @if(!empty($checkbox['template_group'][$template_group->id])) checked @endif"--}}
                    {{--                                                       type="checkbox">--}}
                    {{--                                                <span></span></span>--}}
                    {{--										</span>--}}
                    {{--									</span>--}}
                    <span class="ml-2 @if(
    (request()->get('filter')['категория'] ?? '') == $template_group->name
    && (request()->get('filter')['тип'] ?? '') == $template_group->gender->name
                        )
                        font-weight-bold
@endif">
                        <a href="?filter[тип]={{$template_group->gender->name}}&filter[категория]={{$template_group
                        ->name}}">
										{{$template_group->name}}
                            @if ($template_group->gender->id > 1 )
                                ({{$template_group->gender->name}})
                            @endif
                        </a>
									</span>
                </label>
            @empty
                -
            @endforelse
        </div>
    </div>
    <div class="card overflow-hidden">
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
    <div class="card overflow-hidden">
        <h5 class="m-0 p-3 card-title bg-white border-bottom border-top">Цена</h5>
        <div class="p-3 d-flex align-items-center">
            <div class="w-50">
                <input placeholder="От" wire:model="price.from" class="form-control rounded-0"/>
            </div>
            <span class="h4 m-0 font-weight-normal px-2">-</span>
            <div class="w-50">
                <input placeholder="До" wire:model="price.to" class="form-control rounded-0"/>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        {{--        <h5 class="m-0 p-3 card-title bg-white border-bottom border-top">Ratings</h5>--}}
        {{--        <div class="py-2 px-3">--}}
        {{--            <label class="p-1 mt-2 d-flex align-items-center">--}}
        {{--									<span class="check-box mb-0">--}}
        {{--										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>--}}
        {{--									</span>--}}
        {{--                <span class="ml-3 tx-16 my-auto">--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--									</span>--}}
        {{--            </label>--}}
        {{--            <label class="p-1 mt-2 d-flex align-items-center">--}}
        {{--									<span class="check-box mb-0">--}}
        {{--										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>--}}
        {{--									</span>--}}
        {{--                <span class="ml-3 tx-16 my-auto">--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--									</span>--}}
        {{--            </label>--}}
        {{--            <label class="p-1 mt-2 d-flex align-items-center">--}}
        {{--									<span class="check-box mb-0">--}}
        {{--										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>--}}
        {{--									</span>--}}
        {{--                <span class="ml-3 tx-16 my-auto">--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--									</span>--}}
        {{--            </label>--}}
        {{--            <label class="p-1 mt-2 d-flex align-items-center">--}}
        {{--									<span class="checkbox mb-0">--}}
        {{--										<span class="check-box">--}}
        {{--											<span class="ckbox"><input type="checkbox"><span></span></span>--}}
        {{--										</span>--}}
        {{--									</span>--}}
        {{--                <span class="ml-3 tx-16 my-auto">--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--									</span>--}}
        {{--            </label>--}}
        {{--            <label class="p-1 mt-2 d-flex align-items-center">--}}
        {{--									<span class="checkbox mb-0">--}}
        {{--										<span class="check-box">--}}
        {{--											<span class="ckbox"><input type="checkbox"><span></span></span>--}}
        {{--										</span>--}}
        {{--									</span>--}}
        {{--                <span class="ml-3 tx-16 my-auto">--}}
        {{--										<i class="ion ion-md-star  text-warning"></i>--}}
        {{--									</span>--}}
        {{--            </label>--}}
        {{--        </div>--}}
        <div class="px-3 py-3 border-top">
            <button class="btn btn-danger btn-block">Применить фильтр</button>
        </div>
    </div>
</div>
