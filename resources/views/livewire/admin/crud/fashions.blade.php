<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Фасоны</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($products as $product)
            <tr>
                <td nowrap=""><h6><a href="{{url('/admin/tables/items/'.$product->id)}}"> Фасон
                            №{{$product->id}}</a></h6>
                    @foreach($product->raws as $raw)
                        <li>{{$raw->raw_type->name}}: {{$raw->name}}
                            @if ($raw->pivot->qty > 0)
                                 ({{$raw->pivot->qty}} {{$raw->raw_type->mesure->name}})
                            @endif
                        </li>
                    @endforeach
                    @if ($product->media)
                        @foreach($product->getMedia('images') as $image)
                            <li><img src="{{$image->getUrl('thumb')}}"> <button wire:click.prevent="deleteImage({{ $image->id }})"
                                                   onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                                                   class="btn btn-sm btn-danger">Удалить изображение</button></li>
                        @endforeach
                    @endif
                </td>
                <td nowrap="">
                    <a wire:click.prevent="editPhoto({{ $product->id }})"
                       href="#" class="btn btn-sm btn-success">Добавить фото </a>
                    <a href="{{url('/admin/tables/fashions_details/'.$product->id)}}" class="btn btn-sm btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $product->id }})"
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

    {{--    Модальное окно добавления фасона--}}
    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $productId ? 'Редактирование' : 'Добавление нового фасона'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 >В привязке к модели: {{$parentName}}</h6>
                        <label for="raws">Наименование:</label>
                        <br/>
                        <select wire:model.prevent="raw.id" class="form-control" id="raws">
                            <option hidden>-- Выберите материал -- </option>
                        @forelse($raws as $raw)
                            <option value="{{$raw->id}}">{{$raw->raw_type->name}}: {{$raw->name}}</option>
                            @empty
                            <option disabled>Нет вариантов сырья</option>
                        @endforelse
                        @error('product.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror
                        </select>
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
                        <h6 >В привязке к фасону: №{{$productId}}</h6>
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
