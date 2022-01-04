<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Добавить новый</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Образ покупателя</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($genders as $gender)
            <tr>
                <td><a class="btn btn-success" href="{{url('admin/tables/template_groups/'.$gender->id)}}"> {{
                $gender->name }}</a></td>
                <td nowrap="">
                    <a wire:click.prevent="edit({{ $gender->id }})"
                       href="#" class="btn btn-sm btn-primary">Изменить</a>
                    <button wire:click.prevent="delete({{ $gender->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Удалить</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одного образа покупателя в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $genders->links() }}

    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $genderId ? 'Редактирование' : 'Добавление нового образа покупателя'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Наименование:
                        <br/>
                        <input wire:model="gender.name" class="form-control"/>
                        @error('gender.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ $genderId ? 'Сохранить изменения' :
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
