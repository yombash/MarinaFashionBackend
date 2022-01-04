<button wire:click="clear_basket()"
        class="btn btn-primary btn-block mb-0 mt-4"
        onclick="confirm('Вы уверены, что хотите полностью очистить корзину?') || event.stopImmediatePropagation()"
>
    <i class="fe fe-shopping-cart mr-1"></i>
    Очистить корзину
</button>
