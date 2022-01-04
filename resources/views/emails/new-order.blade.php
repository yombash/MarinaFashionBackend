<div>
    <h1>Новый заказ</h1>
    <h3>{{$name}}</h3>
    <h3>Тел. {{$phone}}</h3>
    <h3>E-mail. {{$email}}</h3>
    <div>
    @forelse(basket()->all() as $fashion_id => $item)
        <livewire:shop.cart.basket-item
            :fashion-id=$fashion_id
            :qty="$item['qty']"
            :price="$item['price']"
            :mult="$item['mult']"
        />
    @empty
    @endforelse
    </div>
    <div>
        Сумма {{rub(basket()->sum())}}
    </div>
</div>
