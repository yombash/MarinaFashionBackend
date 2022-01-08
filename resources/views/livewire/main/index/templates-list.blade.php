<div class="d-sm-flex row">
    @forelse($template_groups as $item)
        <div class="mg-r-20 mg-l-10 mg-b-10">
            <div class="main-profile-contact-list">
                <div class="media">
                    <div class="media-icon bg-primary-transparent text-primary">
{{--                        <i class="ti ti-folder"></i>--}}
                        <i class="fas fa-angle-right"></i>
                    </div>
                    <div class="media-body">
                        <a href="{{route('shop.index',[
                            'filter' => [
                                'вид-продукции' => $item->name,
                                'тип'=> $item->gender->name
                            ]
                       ])}}">
                            <span>Открыть в каталоге</span>
                            <div>
                                {{$item->name}}

                                @if($item->gender->name != "Женская одежда")
                                    ({{$item->gender->name}})
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <li>::: каталог находится в процессе заполнения :::</li>
    @endforelse
</div>
