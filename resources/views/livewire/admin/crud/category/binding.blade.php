<div >
    <div class="row row-sm">

        @forelse ($templates as $template)
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="card overflow-hidden container-fluid">
                    <div class="card-body">
                    <div class="img-wrap">
                        {{--            @dd($fashion)--}}
                        <img src=" @if ($template->fashions->first()->media->count()>0)
                            {{$template->fashions->first()->media->first()->getUrl()}}
                            @endif" class="img-responsive"/>
                        <h4 class="offer-overlay">
                            <div class="ql-color-red">
                                <span title="Название модели">{{$template->name}}</span> {{$template->template_group->name}}
                            </div>

                        </h4>
                        <livewire:admin.crud.category.linked-to-template :id="$template->id"/>

                    </div>
                    </div>

                    {{--        <a href="" wire:click.prevent="show_modal_product_details({{$template->id}})">--}}
                    {{--            <img class="w-100 mt-0" src="--}}

                    {{--                                                " alt="product-image"/>--}}
                    {{--        </a>--}}

                    {{--                        <div class="card-footer">--}}

                    {{--                        </div>--}}
                </div>
            </div>

        @empty

        @endforelse

    </div>
    {{$templates->links()}}
</div>
