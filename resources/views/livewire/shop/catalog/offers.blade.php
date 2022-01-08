<div class="col-xl-12 col-lg-8">
    <div class="row row-sm">

        @forelse ($templates as $template)
            @if($template->fashions->first()->items->first()->products->first()->prices->first()->value > 0)
                <livewire:shop.catalog.card :template="$template"/>
            @endif
        @empty

        @endforelse

    </div>
    {{$templates->links()}}

    {{--    Модальное окно для заказа--}}
    <div class="bg-gray-100">
        <div class="modal @if ($showModal) d-block pos-static @endif">
            <div class="modal-dialog modal-dialog-scrollable modal-width" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Форма заказа товара</h6>
                        <button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"
                                wire:click="close()"><span
                                aria-hidden="true">&times;
                            </span></button>
                    </div>
                    <livewire:shop.catalog.modal-product-details :template-id="$templateId"/>
                    {{--                    <div class="modal-footer">--}}
                    {{--                        <button class="btn btn-primary" type="button">Save changes</button> --}}
                    {{--                        <button class="btn--}}
                    {{--                        btn-light" type="button" wire:click="close()">Закрыть</button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div><!-- modal-wrapper-demo -->

</div>
