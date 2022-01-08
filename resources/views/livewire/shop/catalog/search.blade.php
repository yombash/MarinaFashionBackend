<div class="card overflow-hidden" x-data="{isTyped: false}">
    {{--    <h5 class="m-0 p-3 card-title bg-white border-bottom">Поиск</h5>--}}
    <div class="py-3 px-3">
        <div class="input-group" if="searchWithSuggestions">
            <input type="search"
                   class="form-control"
                   placeholder="Искать ..."
                   x-on:input.debounce.400ms="isTyped = ($event.target.value != '')"
                   autocomplete="off"
                   wire:model.debounce.500ms="search"
                   aria-label="Search input"
            />
            <span class="input-group-append">
										<button class="btn btn-primary" type="button">Искать</button>
									</span>
        </div>
        {{-- search box --}}
        <div x-show="isTyped" x-cloak class="position-relative bg-info" aria-labelledby="searchWithSuggestions">
            <div class="card">
                {{--                    <div class="card-header">--}}
                {{--                        Модели--}}
                {{--                    </div>--}}
                <ul class="list-group list-group-flush">

                    {{--Наименования моделей--}}
                    @forelse($templates as $template)

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('shop.index',[
    'filter'=>[
        'вид-продукции'=> $template->template_group->name,
        'материал'=>$template->fashions->first()->raws->first()->raw_type->name,
        'модель'=>$template->name
        ]
    ])}}">
                                {{$template->template_group->name}} {{$template->name}}
                                {{$template->fashions->first()->raws->first()->raw_type->name}}
                            </a>
{{--                            <span class="badge badge-primary badge-pill"--}}
{{--                                  title="Кол-во видов расцветок тканей">--}}
{{--                                {{$template->fashions->count()}}--}}
{{--                            </span>--}}
                        </li>

                    @empty
                    @endforelse

                    {{--Основные категории товаров--}}
                    @forelse($categories as $category)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('shop.index',[
    'filter'=>[
        'категория'=>$category->name
        ]
    ])}}">Категория: {{$category->name}}</a>
{{--                            @php--}}
{{--                                $count = 0;--}}
{{--                                foreach ($category->templates as $template)--}}
{{--                                    $count += $template->fashions->count();--}}
{{--                            @endphp--}}
{{--                            <span class="badge badge-primary badge-pill"--}}
{{--                                  title="Кол-во видов расцветок тканей">--}}
{{--                                {{$count}}--}}
{{--                            </span>--}}
                        </li>

                    @empty
                    @endforelse

                    {{--Виды материалов--}}
                    @forelse($raw_types as $raw_type)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('shop.index',[
    'filter'=>[
        'материал'=>$raw_type->name
        ]
    ])}}">Материал: {{$raw_type->name}}</a>
{{--                            @php--}}
{{--                                $count = 0;--}}
{{--                                foreach ($category->templates as $template)--}}
{{--                                    $count += $template->fashions->count();--}}
{{--                            @endphp--}}
{{--                            <span class="badge badge-primary badge-pill"--}}
{{--                                  title="Кол-во видов расцветок тканей">--}}
{{--                                {{$count}}--}}
{{--                            </span>--}}
                        </li>

                    @empty
                    @endforelse

                    {{--Группы изделий--}}
                    @forelse($template_groups as $template_group)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{route('shop.index',[
    'filter'=>[
        'вид-продукции'=>$template_group->name,
        'тип' => $template_group->gender->name
        ]
    ])}}">Вид продукции: {{$template_group->name}}
                                @if($template_group->gender->name != "Женская одежда")
                                    ({{$template_group->gender->name}})
                                @endif
                            </a>
                            {{--                            @php--}}
                            {{--                                $count = 0;--}}
                            {{--                                foreach ($category->templates as $template)--}}
                            {{--                                    $count += $template->fashions->count();--}}
                            {{--                            @endphp--}}
                            {{--                            <span class="badge badge-primary badge-pill"--}}
                            {{--                                  title="Кол-во видов расцветок тканей">--}}
                            {{--                                {{$count}}--}}
                            {{--                            </span>--}}
                        </li>

                    @empty
                    @endforelse

                </ul>
                @if(!empty($isEmpty))
                    <div x-cloak>
                        {{$isEmpty}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
