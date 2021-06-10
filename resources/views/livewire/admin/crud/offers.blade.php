<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>

    <div @if ($showModal) style="display:block" @else style="display:none" @endif>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Товар</th>
            <th scope="col">Выбрать</th>
        </tr>
        </thead>
        <tbody class="">
{{--        @dd($hierarchy);--}}
        @foreach($product_list as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>
                    @foreach ($product->items as $item)
                        <li>
                            Размер [{{$item->size->name}}]
                        </li>
                    @endforeach
                </td>
                <td><input type="checkbox" wire:model="checked.{{ $product->id }}"/></td>
            </tr>
                                @endforeach

        </tbody>
    </table>
                                <button wire:click="close" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                                </button>
    </div>
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

    <table class="table mt-4">
        <thead>
        <tr>
            <th>Товарное предложение</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($offers as $offer)
            <tr>
                <td nowrap=""><a href="{{url('admin/constructors/offer/'.$offer->id)}}"> {{ $offer->name }}</a></td>
                <td nowrap="">
                    <a wire:click.prevent="edit({{ $offer->id }})"
                       href="#" class="btn btn-sm btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $offer->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного образа покупателя в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $offers->links() }}


</div>
