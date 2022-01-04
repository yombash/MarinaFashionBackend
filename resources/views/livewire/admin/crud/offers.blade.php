<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>


    <div class="example bg-gray-100" @if ($showModal) style="display:block" @else style="display:none" @endif>
        <form wire:submit.prevent="save">
        <div class="modal d-block pos-static">
            <div class="modal-dialog modal-width modal-dialog-scrollable" role="document">
                <div class="modal-content modal-content-demo">

                        <div class="modal-header">
                            <h6 class="modal-title">Продукты, ещё НЕ добавленные в товарные предложения</h6>
                            <button
                                aria-label="Close" class="close"
                                data-dismiss="modal"
                                type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row row-sm">
                                <div class="col-lg-6 col-md-12">
                                    <div class="card mg-b-20" id="list8">
                                        <div class="card-body">
                                            <div class="main-content-label mg-b-5">
                                                Using Image
                                            </div>
                                            <p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
                                            <div class="text-wrap">
                                                <div class="example">
                                                    <ul class="list-group wd-md-100p">
                                                        <li class="list-group-item d-flex align-items-center">
                                                            <img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/5.jpg')}}">
                                                            <div>
                                                                <h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center">
                                                            <img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/6.jpg')}}">
                                                            <div>
                                                                <h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center">
                                                            <img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/9.jpg')}}">
                                                            <div>
                                                                <h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                            @forelse($product_list as $product)--}}
{{--                                    <tr>--}}
{{--                                        <th scope="row">{{$loop->iteration}}</th>--}}
{{--                                        <td>--}}
{{--                                            @if ($product->items_count > 1)--}}
{{--                                                <h5>Комплект!</h5>--}}
{{--                                            @endif--}}
{{--                                            <table class="table">--}}
{{--                                                @foreach ($product->items as $item)--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="w-75"><img src="{{$item->fashion->getFirstThumbUrl()--}}
{{--                                    }}" height="150"/></td>--}}
{{--                                                        <td>--}}

{{--                                                            {{$item->fashion->template->name}} [{{$item->size->name}}]--}}
{{--                                                            {{$item->fashion->template->template_group->name}}--}}
{{--                                                            @foreach($item->fashion->raws as $raw)--}}
{{--                                                                {{$raw->raw_type->name}}--}}
{{--                                                            @endforeach--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                            </table>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <input type="checkbox" wire:model="checked.{{ $product->id }}"/>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @empty--}}
{{--                                    <tr>--}}
{{--                                        <td colspan="3">Не найдено ни одного свободного товара для добавления в товарные--}}
{{--                                            предложения--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforelse--}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            @if (count($product_list))
                                <button type="submit" class="btn btn-primary">Записать</button>
                            @endif
                            <button wire:click="close" type="button" class="btn btn-secondary float-right"
                                    data-dismiss="modal">Закрыть
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- modal-wrapper-demo -->

    {{--    <div @if ($showModal) style="display:block" @else style="display:none" @endif>--}}
    {{--        <form wire:submit.prevent="save">--}}
    {{--            <table class="table table-striped">--}}
    {{--                <thead>--}}
    {{--                <tr>--}}
    {{--                    <th scope="col">#</th>--}}
    {{--                    <th scope="col">Товар</th>--}}
    {{--                    <th scope="col">V</th>--}}
    {{--                </tr>--}}
    {{--                </thead>--}}
    {{--                <tbody class="">--}}
    {{--                --}}{{--        @dd($hierarchy);--}}
    {{--                @forelse($product_list as $product)--}}
    {{--                    <tr>--}}
    {{--                        <th scope="row">{{$loop->iteration}}</th>--}}
    {{--                        <td>--}}
    {{--                            @if ($product->items_count > 1)--}}
    {{--                                <h5>Комплект!</h5>--}}
    {{--                            @endif--}}
    {{--                            <table class="table">--}}
    {{--                                @foreach ($product->items as $item)--}}
    {{--                                    <tr>--}}
    {{--                                        <td class="w-75"><img src="{{$item->fashion->getFirstThumbUrl()--}}
    {{--                                    }}" height="150"/></td>--}}
    {{--                                        <td>--}}

    {{--                                            {{$item->fashion->template->name}} [{{$item->size->name}}]--}}
    {{--                                            {{$item->fashion->template->template_group->name}}--}}
    {{--                                            @foreach($item->fashion->raws as $raw)--}}
    {{--                                                {{$raw->raw_type->name}}--}}
    {{--                                            @endforeach--}}
    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                @endforeach--}}
    {{--                            </table>--}}
    {{--                        </td>--}}
    {{--                        <td>--}}
    {{--                            <input type="checkbox" wire:model="checked.{{ $product->id }}"/>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                @empty--}}
    {{--                    <tr>--}}
    {{--                        <td colspan="3">Не найдено ни одного свободного товара для добавления в товарные--}}
    {{--                            предложения--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                @endforelse--}}

    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--            @if (count($product_list))--}}
    {{--            <button type="submit" class="btn btn-primary">Записать</button>--}}
    {{--            @endif--}}
    {{--        </form>--}}
    {{--        <button wire:click="close" type="button" class="btn btn-secondary float-right" data-dismiss="modal">Закрыть--}}
    {{--        </button>--}}
    {{--    </div>--}}


    {{--    <div class="" @if ($showModal) style="display:block" @endif>--}}
    {{--        <div class="modal-dialog" role="document">--}}
    {{--            <div class="modal-content">--}}
    {{--                <form wire:submit.prevent="save">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h5 class="modal-title">{{ $offerId ? 'Редактирование' : 'Добавление нового товарного--}}
    {{--                        предложения'--}}
    {{--                        }}</h5>--}}

    {{--                        <button wire:click="close" type="button" class="close" data-dismiss="modal"--}}
    {{--                                aria-label="Закрыть">--}}
    {{--                            <span aria-hidden="true">&times;</span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        Список предложений:--}}
    {{--                        @foreach($product_list as $product)--}}
    {{--                            <li><input type="checkbox" wire:model="checked.{{ $product->id }}"/>--}}
    {{--                                <ul>--}}
    {{--                                    @foreach ($product->items as $item)--}}
    {{--                                        <li>--}}
    {{--                                            [{{$item->size->name}}]--}}
    {{--                                        </li>--}}
    {{--                                    @endforeach--}}
    {{--                                </ul>--}}
    {{--                            </li>--}}
    {{--                        @endforeach--}}
    {{--                        <br/>--}}
    {{--                        <input wire:model="offer.name" class="form-control"/>--}}
    {{--                        @error('offer.name')--}}
    {{--                        <div style="font-size: 11px; color: red">{{ $message }}</div>--}}
    {{--                        @enderror--}}

    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="submit" class="btn btn-primary">{{ $offerId ? 'Сохранить изменения' :--}}
    {{--                        'Сохранить'--}}
    {{--                        }}</button>--}}
    {{--                        <button wire:click="close" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <table class="table mt-4 table-striped">
        <thead>
        <tr>
            <th>Наименование</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($offers as $offer)
            @php($offer_card = \App\Models\Offer::offer_card($offer))
            <tr>
                <td><img height="150" src="{{$offer_card['thumb_url']}}"/></td>
                <td>{{$offer_card['template']}} {{$offer_card['template_group']}}
                    {{$offer_card['raw_type']}}
                    Размерный ряд: {{count
                    ($offer_card['sizes'])}}
                    Размеры: {{array_shift($offer_card['sizes'])}} - {{array_pop($offer_card['sizes'])}}
                    @if (count($offer_card['raw_type_additional']))
                        @foreach ($offer_card['raw_type_additional'] as $raw_type)
                            <li>+ {{$raw_type}}</li>
                        @endforeach
                    @endif

                </td>
                <td nowrap="">
                    {{--                    <a wire:click.prevent="edit({{ $offer->id }})"--}}
                    {{--                       href="#" class="btn btn-sm btn-primary">Изменить</a>--}}
                    <button wire:click.prevent="delete({{ $offer->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного товарного предложения в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $offers->links() }}


</div>
