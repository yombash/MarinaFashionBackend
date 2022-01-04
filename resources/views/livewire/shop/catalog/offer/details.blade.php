<div>
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="single-productslide">
                    <div class="row no-gutter">
                            @php
                            $template
                                = \App\Models\Template::find(request()->template_id);
                            $fashion_index = (int)request()->fashion_index;
                            @endphp
                            <livewire:shop.catalog.card
                                :template=$template
                                :fashion-index=$fashion_index
                            />
                        <div class="col-lg-6">
                            <div class="p-4">
                                <h4 class="product-title">Fabric Sofa</h4>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star text-muted"></span>
                                        <span class="fa fa-star text-muted"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                                <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu
                                    laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu
                                    delectus posuere.</p>
                                <h6 class="price">current price: <span class="h3 ml-2">$180</span></h6>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87
                                        votes)</strong></p>
                                <div class="sizes d-flex">sizes:
                                    <span class="size d-flex" data-toggle="tooltip" title="small"><label
                                            class="rdiobox mb-0"><input checked="" name="rdio" type="radio"> <span
                                                class="font-weight-bold">s</span></label></span>
                                    <span class="size d-flex" data-toggle="tooltip" title="medium"><label
                                            class="rdiobox mb-0"><input name="rdio" type="radio"> <span>m</span></label></span>
                                    <span class="size d-flex" data-toggle="tooltip" title="large"><label
                                            class="rdiobox mb-0"><input name="rdio" type="radio"> <span>l</span></label></span>
                                    <span class="size d-flex" data-toggle="tooltip" title="extra-large"><label
                                            class="rdiobox mb-0"><input name="rdio"
                                                                        type="radio"> <span>xl</span></label></span>
                                </div>
                                <div class="colors d-flex mr-3 mt-2">
                                    <span class="mt-2">colors:</span>
                                    <div class="row gutters-xs ml-4">
                                        <div class="mr-2">
                                            <label class="colorinput">
                                                <input name="color" type="radio" value="azure" class="colorinput-input"
                                                       checked="">
                                                <span class="colorinput-color bg-danger"></span>
                                            </label>
                                        </div>
                                        <div class="mr-2">
                                            <label class="colorinput">
                                                <input name="color" type="radio" value="indigo"
                                                       class="colorinput-input">
                                                <span class="colorinput-color bg-secondary"></span>
                                            </label>
                                        </div>
                                        <div class="mr-2">
                                            <label class="colorinput">
                                                <input name="color" type="radio" value="purple"
                                                       class="colorinput-input">
                                                <span class="colorinput-color bg-dark"></span>
                                            </label>
                                        </div>
                                        <div class="mr-2">
                                            <label class="colorinput">
                                                <input name="color" type="radio" value="pink" class="colorinput-input">
                                                <span class="colorinput-color bg-pink"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex  mt-2">
                                    <div class="mt-2 product-title">Quantity:</div>
                                    <div class="d-flex ml-2">
                                        <ul class=" mb-0 qunatity-list">
                                            <li>
                                                <div class="form-group">
                                                    <select name="quantity" id="select-countries17"
                                                            class="form-control nice-select wd-100">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="action">
                                    <button class="add-to-cart btn btn-danger" type="button">ADD TO WISHLIST</button>
                                    <button class="add-to-cart btn btn-success" type="button">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-4">
                <div class="panel panel-primary tabs-style-2">
                    <div class=" tab-menu-heading">
                        <div class="tabs-menu1">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs main-nav-line">
                                <li><a href="#tab4" class="nav-link active" data-toggle="tab">Description</a></li>
                                <li><a href="#tab5" class="nav-link" data-toggle="tab">Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body main-content-body-right border">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab4">
                                <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                    dolorum fuga.</p>
                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                    soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
                                <p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                    repellendus.
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi
                                    sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                                    deserunt mollitia animi, id est laborum et dolorum fuga.

                                    On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire,
                                    that they cannot foresee the pain and trouble thena bound to ensue; and equal blame
                                    belongs to those who fail in their duty through weakness of will, which is the same
                                    as saying through shrinking from toil and pain.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab5">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table row table-borderless w-100 m-0 text-nowrap ">
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><span class="font-weight-bold">Type :</span> Fabric</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Material :</span> Good</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Fabric :</span> Cotton</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Ideal For :</span> Seating</td>
                                                </tr>
                                                </tbody>
                                                <tbody class="col-lg-12 col-xl-6 p-0">
                                                <tr>
                                                    <td><span class="font-weight-bold">Size :</span> M</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Color :</span> Moss Green</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Pack of :</span> 1</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-weight-bold">Fabric Care :</span> Machine Wash
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Comments-->
            <div class="card">
                <div class="card-header pd-t-25">
                    <h3 class="card-title">3 Reviews</h3>
                </div>
                <div class="card-body pd-t-0">
                    <div class="d-sm-flex mt-3 p-4 sub-review-section border border-bottom-0 br-bl-0 br-br-0 rounded-5">
                        <div class="d-flex mr-3">
                            <a href="#"><img class="media-object brround avatar-md" alt="64x64"
                                             src="{{URL::asset('assets/img/faces/6.jpg')}}"> </a>
                        </div>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                <span class="tx-14 ml-2"> 4.5 <i class="fa fa-star tx-warning"></i></span>
                            </h6>
                            <p class="font-13  mb-2 mt-2">
                                Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco
                                laboris commodo consequat.
                            </p>
                            <a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
                            <a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span
                                    class="badge badge-light">Comment</span></a>
                            <a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span
                                    class="badge badge-light">Report</span></a>
                            <div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex p-4 sub-review-section border subsection-color br-tl-0 br-tr-0 rounded-5">
                        <div class="d-flex mr-3">
                            <a href="#"><img class="media-object brround avatar-md" alt="64x64"
                                             src="{{URL::asset('assets/img/faces/1.jpg')}}"> </a>
                        </div>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1 font-weight-semibold">Rose Slater </h6>
                            <p class="font-13  mb-2 mt-2">
                                Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris commodo consequat.
                            </p>
                            <a href="" data-toggle="modal" data-target="#Comment" class="mt-1"><span
                                    class="badge badge-light">Comment</span></a>
                            <div class="btn-group btn-group-sm mb-1 ml-auto float-right mt-1">
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex p-4 mt-4 border sub-review-section rounded-5">
                        <div class="d-flex mr-3">
                            <a href="#"><img class="media-object brround avatar-md" alt="64x64"
                                             src="{{URL::asset('assets/img/faces/2.jpg')}}"> </a>
                        </div>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1 font-weight-semibold">Edward
                                <span class="tx-14 ml-2"> 4 <i class="fa fa-star tx-warning"></i></span>
                            </h6>
                            <p class="font-13  mb-2 mt-2">
                                Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco
                                laboris commodo consequat.
                            </p>
                            <a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
                            <a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span
                                    class="badge badge-light">Comment</span></a>
                            <a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span
                                    class="badge badge-light">Report</span></a>
                            <div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
                                <button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Comments-->
        </div>
