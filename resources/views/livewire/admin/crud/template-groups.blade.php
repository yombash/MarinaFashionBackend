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
        @forelse ($products as $product)
            <tr>
                <td><a href="{{url('/admin/tables/templates/'.$product->id)}}"> {{ $product->name }}</a></td>
                <td nowrap="">
                    <a wire:click.prevent="edit({{ $product->id }})"
                       href="#" class="btn btn-sm btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $product->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного шаблона в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $products->links() }}

    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $productId ? 'Редактирование' : 'Добавление нового типа изделия'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>В привязке к образу покупателя: {{$parentName}}</h6>
                        Наименование:
                        <br/>
                        <input wire:model="product.name" class="form-control"/>
                        @error('product.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ $productId ? 'Сохранить изменения' :
                        'Сохранить'
                        }}</button>
                        <button wire:click="close" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
