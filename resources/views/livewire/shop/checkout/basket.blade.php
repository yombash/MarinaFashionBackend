<section>

    @forelse(basket()->all() as $fashion_id => $item)
        <livewire:shop.cart.basket-item
            :fashion-id=$fashion_id
            :qty="$item['qty']"
            :price="$item['price']"
            :mult="$item['mult']"
        />
    @empty
        Корзина пуста
    @endforelse

    <div class="table-responsive mg-t-20">
        <table class="table table-bordered table-hover mb-0 text-nowrap">
            <thead>
            <tr>
                <th>Наименование</th>
                <th class="w-150">Кол-во</th>
                <th >Цена</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="media">
                        <div class="card-aside-img">
                            <img src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
                        </div>
                        <div class="media-body">
                            <div class="card-item-desc mt-1">
                                <h6 class="font-weight-semibold mt-0 text-uppercase">Flower wase</h6>
                                <dl class="card-item-desc-1">
                                    <dt>Size: </dt>
                                    <dd>XXL</dd>
                                </dl>
                                <dl class="card-item-desc-1">
                                    <dt>Color: </dt>
                                    <dd>Green and Black color</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="quantity" id="select-countries" class="form-control custom-select select2">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3" >3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </td>
                <td>$45</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
                        <a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="media">
                        <div class="card-aside-img">
                            <img src="{{URL::asset('assets/img/ecommerce/06.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
                        </div>
                        <div class="media-body">
                            <div class="card-item-desc mt-1">
                                <h6 class="font-weight-semibold mt-0 text-uppercase">New Stool</h6>
                                <dl class="card-item-desc-1">
                                    <dt>Size: </dt>
                                    <dd>XL</dd>
                                </dl>
                                <dl class="card-item-desc-1">
                                    <dt>Color: </dt>
                                    <dd>Black color</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="quantity" id="select-countries1" class="form-control custom-select select2">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3" >3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </td>
                <td>$15</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
                        <a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="media">
                        <div class="card-aside-img">
                            <img src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
                        </div>
                        <div class="media-body">
                            <div class="card-item-desc mt-1">
                                <h6 class="font-weight-semibold mt-0 text-uppercase">New Flower Wase</h6>
                                <dl class="card-item-desc-1">
                                    <dt>Size: </dt>
                                    <dd>XL</dd>
                                </dl>
                                <dl class="card-item-desc-1">
                                    <dt>Color: </dt>
                                    <dd>LightPink color</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="quantity" id="select-countries2" class="form-control custom-select select2">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3" >3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </td>
                <td>$136</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
                        <a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="media">
                        <div class="card-aside-img">
                            <img src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="img" class="ht-70-f wd-70-f mg-r-20">
                        </div>
                        <div class="media-body">
                            <div class="card-item-desc mt-1">
                                <h6 class="font-weight-semibold mt-0 text-uppercase">Modren Sofa</h6>
                                <dl class="card-item-desc-1">
                                    <dt>Size: </dt>
                                    <dd>11-12 inches</dd>
                                </dl>
                                <dl class="card-item-desc-1">
                                    <dt>Color: </dt>
                                    <dd>LightGray color</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="quantity" id="select-countries3" class="form-control custom-select select2">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3" >3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </td>
                <td>$274</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-danger btn-icon btn-sm text-white mr-2" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash"></i></a>
                        <a class="btn btn-info btn-icon btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fe fe-heart"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">Cart Subtotal</td>
                <td colspan="2" class="text-right">$792.00</td>
            </tr>
            <tr>
                <td colspan="2"><span>Totals</span></td>
                <td colspan="2" class="text-right text-muted"><span>$792.00</span></td>
            </tr>
            <tr>
                <td colspan="2"><span>Order Total</span></td>
                <td colspan="2"><h2 class="price text-right mb-0">$792.00</h2></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
