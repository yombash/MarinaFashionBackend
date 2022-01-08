<div class="card">
    <a wire:click.prevent="create" href="#" class="btn btn-success">Добавить категорию</a>

{{--    <ul wire:sortable="updateTaskOrder">--}}
{{--    @forelse ($categories as $category)--}}
{{--        <li wire:sortable.item="{{ $category->id }}" wire:key="category-{{ $category->id }}">--}}
{{--            <h4 wire:sortable.handle> {{$category->name }}</h4>--}}
{{--        </li>--}}
{{--    @empty--}}
{{--        <li>--}}
{{--            <h4 colspan="3">Не найдено ни одной категории в БД</h4>--}}
{{--        </li>--}}
{{--    @endforelse--}}
{{--    </ul>--}}

    <table class="table" >
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>Категории на главной странице</th>--}}
{{--            <th></th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
        <tbody wire:sortable="updateOrder">
        @forelse ($categories as $category)
            <tr wire:sortable.item="{{ $category->id }}" wire:key="category-{{ $category->id }}">
                <td wire:sortable.handle> {{
                $category->name }}</td>
                <td nowrap="">
                    <a wire:click.prevent="edit({{ $category->id }})"
                       href="#" class="btn btn-sm btn-primary"><i class="editor-link"></i> </a>
                    <button wire:click.prevent="delete({{ $category->id }})"
                            onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">X</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Не найдено ни одной категории в БД</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <p class="text-danger p-4">Категории можно сортировать перетаскиванием вверх/вниз</p>

    {{ $categories->links() }}

    <div class="modal" @if ($showModal) style="display:block" @endif>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form wire:submit.prevent="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $categoryId ? 'Редактирование' : 'Добавление новой корневой
                        категории'
                        }}</h5>

                        <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Наименование:
                        <br/>
                        <input wire:model="category.name" class="form-control"/>
                        @error('category.name')
                        <div style="font-size: 11px; color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ $categoryId ? 'Сохранить изменения' :
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
