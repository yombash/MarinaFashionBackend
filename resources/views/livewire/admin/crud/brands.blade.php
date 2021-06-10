<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Брэнд</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($brands as $brand)
            <tr>
                <td>{{ $brand->name }}
                    @if ($brand->media)
                        @foreach($brand->getMedia('images') as $image)
                            <li>{{$image}}
                                <button wire:click.prevent="deleteImage({{ $image->id }})"
                                        onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                                        class="btn btn-sm btn-danger">Удалить изображение
                                </button>
                            </li>
                        @endforeach
                    @endif
                </td>
                <td nowrap="">
                    <a wire:click.prevent="edit({{ $brand->id }})"
                       href="#" class="btn btn-sm btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $brand->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного брэнда в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $brands->links() }}

    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $brandId ? 'Редактирование' : 'Добавление нового брэнда'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Наименование:
                        <br/>
                        <input wire:model="brand.name" class="form-control"/>
                        @error('brand.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ $brandId ? 'Сохранить изменения' :
                        'Сохранить'
                        }}</button>
                        <button wire:click="close" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                        </button>
                    </div>
                </form>
                @if ($brandId)
                    <form wire:submit.prevent="uplodeImage({{ $brand->id }})">
                        <div class="modal-footer">
                            <input type="file" wire:model="image" class="form-control"/>
                            @error('image')
                            <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Загрузить изображение</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
