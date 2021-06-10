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
                <td nowrap=""><h6>{{$product->name}}</h6>
                    @if ($product->media)
{{--                        {{$product->getFirstMediaUrl('thumb')}}--}}
                        @foreach($product->getMedia('images') as $image)
                            <li class="p-2">
                                <img src="{{$image->getUrl('thumb')}}"/> <button wire:click.prevent="deleteImage({{
                                $image->id
                            }})"
                                                   onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                                                   class="btn btn-sm btn-danger">Удалить изображение</button></li>
                        @endforeach
                    @endif
                </td>
                <td nowrap="">
                    <a wire:click.prevent="editPhoto({{ $product->id }})"
                       href="#" class="btn btn-sm btn-success">Добавить фото </a>
                    <a wire:click.prevent="edit({{ $product->id }})" href="#" class="btn btn-sm
                    btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $product->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного экземпляра сырья</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{--    Модальное окно добавления фасона--}}
    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $productId ? 'Редактирование' : 'Добавление нового экземпляра'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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

    {{--    Модальное окно добавления фотографии--}}
    <div class="modal" @if ($showModalPhoto) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="uplodeImage({{ $productId }})" >
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление фото к фасону</h5>

                        <button wire:click="closePhoto" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 >В привязке к сырью: {{$parentName}}: {{$productName}}</h6>
                        <label for="raws">Наименование:</label>
                        <br/>

                        @if ($productId)

                            <div class="modal-footer">
                                <input type="file" wire:model="image" class="form-control"/>
                                @error('image')
                                <div style="font-size: 11px; color: red">{{ $message }}</div>
                                @enderror

                            </div>
                        @endif

                        @error('image')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ $productId ? 'Загрузить изображение' :
                        'Сохранить'
                        }}</button>
                        <button wire:click="closePhoto" type="button" class="btn btn-secondary"
                                data-dismiss="modal">Закрыть
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
