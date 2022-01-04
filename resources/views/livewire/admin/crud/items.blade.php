<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Наименование</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($items as $item)
            <tr>
                <td nowrap=""><h6> Размер
                            №{{$item->size->name}}</h6>
                </td>
                <td nowrap="">
                    @if(count($item->products)==0)
                    <button wire:click.prevent="insert_mono_product({{ $item->id }})"
                            class="btn btn-sm btn-success">Сделать одиночкой</button>
                    @else
                        <button wire:click.prevent="remove_mono_product({{ $item->id }})"
                                class="btn btn-sm btn-warning">Убрать из одиночек</button>
                    @endif
                    <button wire:click.prevent="delete({{ $item->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одной модели в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $items->links() }}

    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление нового размера
                            <a wire:click="close" href="{{url('/admin/tables/sizes')}}" class="btn btn-primary"
                               target="_blank">Добавить новый
                                размер</a>
                        </h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 >В привязке к фасону: {{$parentName}}</h6>
                        <label for="raws">Наименование:</label>
                        <br/>
                        <select wire:model.prevent="product.size_id" class="form-control" id="raws">
                            <option hidden>-- Выберите размер -- </option>
                            @forelse($sizes as $size)
                                <option value="{{$size->id}}">{{$size->name}}</option>
                            @empty
                                <option disabled>Нет вариантов размеров</option>
                            @endforelse
                            @error('product.name')
                            <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">{{ $productId ? 'Сохранить изменения' :
                        'Выбрать из списка'
                        }}</button>
                        <button wire:click="close" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
