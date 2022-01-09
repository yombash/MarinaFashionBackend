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
        @forelse ($fashions as $fashion)
            <tr>
                <td nowrap=""><h6><a href="{{url('/admin/tables/items/'.$fashion->id)}}">
                            @if ($fashion->raws->count()>0)
                                {{$fashion->raws->first()->raw_type->name}}

                                @if (!empty($fashion->raws->first()->name))
                                    {{$fashion->raws->first()->name}}
                                @endif
                                :
                            @endif
                            Фасон
                            №{{$fashion->id}}</a></h6>
                    @if ($fashion->media)
                        @foreach($fashion->getMedia('images') as $image)
                            <li><img height="200" class="mg-10" src="{{$image->getUrl()}}">
                                <button wire:click.prevent="deleteImage({{ $image->id }})"
                                        onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                                        class="btn btn-sm btn-danger">Удалить фото
                                </button>
                            </li>
                        @endforeach
                    @endif
                </td>
                <td nowrap="">
                    <a wire:click.prevent="editPhoto({{ $fashion->id }})"
                       href="#" class="btn btn-sm btn-success">Добавить фото </a>
                    {{--                    <a href="{{url('/admin/tables/fashions_details/'.$fashion->id)}}" class="btn btn-sm btn-primary">Изменить</a>--}}
                    <button wire:click.prevent="delete({{ $fashion->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить фасон
                    </button>
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
                        <h5 class="modal-title">{{ $fashionId ? 'Редактирование' : 'Добавление нового фасона'
                        }}
                            <a wire:click="close" href="{{route('admin.tables.raw-types')}}" class="btn btn-primary"
                               onclick="return confirm
                            ('Перейти в форму добавления новых метериалов?');" target="_blank">Добавить новый
                                материал (если нет в списке)</a>
                        </h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>В привязке к модели: {{$parentName}}</h6>
                        <label for="raws">Наименование:</label>
                        <br/>


                        <select wire:model.prevent="raw_type.id" class="form-control" id="raws">
                            <option hidden>-- Выберите материал --</option>
                            @forelse($raw_types as $raw_type)
                                <option value="{{$raw_type->id}}">
                                    {{$raw_type->name}}
                                </option>
                            @empty
                                <option disabled>Нет вариантов сырья</option>
                            @endforelse
                            @error('fashion.name')
                            <div style="font-size: 11px; color: red">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">{{ $fashionId ? 'Сохранить изменения' :
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
                <form wire:submit.prevent="uplodeImage({{ $fashionId }})">
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление фото к фасону</h5>

                        <button wire:click="closePhoto" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>В привязке к фасону: №{{$fashionId}}</h6>
                        <label for="raw_types">Наименование:</label>
                        <br/>

                        @if ($fashionId)

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
                        <button type="submit" class="btn btn-primary">{{ $fashionId ? 'Загрузить изображение' :
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
