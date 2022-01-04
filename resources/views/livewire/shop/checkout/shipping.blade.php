<div class="table-responsive p-4">
    <form wire:submit.prevent="checkout()">
        <div class="control-group form-group">
            <label class="form-label">Ваш номер телефона (обязательное поле)</label>
            <input type="tel" wire:model.lazy="phone" class="form-control required" placeholder="Номер телефона" required>
        </div>
        <div class="control-group form-group">
            <label class="form-label">Ваше имя или название организации (по-желанию)</label>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="Имя">
        </div>
        <div class="control-group form-group">
            <label class="form-label">Ваш E-mail (по-желанию)</label>
            <input type="email" wire:model.lazy="email" class="form-control" placeholder="E-mail">
        </div>
        <button type="submit" class="btn btn-secondary float-left mt-2 m-b-20 " type="submit"
                 value="Proceed To
                    Checkout">
            Завершить оформление заказа
        </button>
    </form>
</div>
