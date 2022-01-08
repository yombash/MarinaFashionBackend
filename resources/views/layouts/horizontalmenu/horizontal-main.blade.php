		<!--Horizontal-main -->
		<div class="sticky">
			<div class="horizontal-main hor-menu clearfix">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix">
						<ul class="horizontalMenu-list">
							<li>
                                <a href="{{url('/')}}" class="">
                                    <div class="side-angle1"></div>
                                    <div class="side-angle2"></div>
                                    <div class="side-arrow"></div>
                                    <svg
                                        class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0
                                         24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2
                                         12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path
                                            d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg>
                                    Главная</a>
                            </li>
{{--                            						<li class="main-header-search ml-40 mt-20 d-sm-none d-none--}}
{{--                            						d-lg-block">--}}
{{--                            							<input class="form-control shadow" id="search-input"--}}
{{--                                                               placeholder="Поиск..." type="text"> <button--}}
{{--                                                            class="btn"><i class="fas fa-search d-none d-md-block"></i></button>--}}
{{--                            						</li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="sub-icon">--}}
{{--                                    <div class="side-angle1"></div>--}}
{{--                                    <div class="side-angle2"></div>--}}
{{--                                    <div class="side-arrow"></div>--}}
{{--                                    <svg--}}
{{--                                        class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0--}}
{{--                                         24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17--}}
{{--                                         7H7V4H5v16h14V4h-2z" opacity=".3"/><path d="M19 2h-4.18C14.4.84 13.3 0 12--}}
{{--                                         0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1--}}
{{--                                         .1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7--}}
{{--                                         18H5V4h2v3h10V4h2v16z"/></svg>--}}
{{--                                    Виды продукции--}}
{{--                                    <i class="fe fe-chevron-down horizontal-icon"></i></a>--}}
{{--                                <div class="horizontal-megamenu clearfix">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="mega-menubg hor-mega-menu">--}}
{{--                                            <div class="row">--}}

{{--                                                @foreach (\App\Models\Gender::all() as $gender)--}}
{{--                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">--}}
{{--                                                    <ul class="p-0">--}}
{{--                                                        <li>--}}
{{--                                                            <h3 class="fs-14 font-weight-bold mb-1--}}
{{--                                                        mt-2">--}}
{{--                                                                {{$gender->name}}--}}
{{--                                                            </h3>--}}
{{--                                                        </li>--}}

{{--                                                        @foreach($gender->template_groups as $template_group)--}}
{{--                                                            <li><a href="{{url--}}
{{--                                                            ("offers?template_group_id={$template_group->id}&gender_id={$gender->id}")}}"--}}
{{--                                                                   class="slide-item">{{$template_group->name}}</a></li>--}}
{{--                                                        @endforeach--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--							<li>--}}
{{--                                <a href="#" class="sub-icon">--}}
{{--                                    <div class="side-angle1"></div>--}}
{{--                                    <div class="side-angle2"></div>--}}
{{--                                    <div class="side-arrow"></div>--}}
{{--                                    <svg class="hor__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>--}}
{{--                                    Материалы--}}
{{--                                    <i class="fe fe-chevron-down horizontal-icon"></i>--}}
{{--                                </a>--}}
{{--								<ul class="sub-menu">--}}
{{--                                    @foreach(\App\Models\RawType::all() as $raw_type)--}}
{{--									<li><a href="{{url('offers?raw_type_id='.$raw_type->id)}}"--}}
{{--                                           class="slide-item">{{$raw_type->name}}</a></li>--}}
{{--                                    @endforeach--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--							<li><a href="#" class="sub-icon"><div class="side-angle1"></div><div--}}
{{--                                        class="side-angle2"></div><div class="side-arrow"></div><svg--}}
{{--                                        class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0--}}
{{--                                         24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17--}}
{{--                                         7H7V4H5v16h14V4h-2z" opacity=".3"/><path d="M19 2h-4.18C14.4.84 13.3 0 12--}}
{{--                                         0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1--}}
{{--                                         .1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7--}}
{{--                                         18H5V4h2v3h10V4h2v16z"/></svg> Каталог моделей<i class="fe fe-chevron-down--}}
{{--                                         horizontal-icon"></i></a>--}}
{{--								<div class="horizontal-megamenu clearfix">--}}
{{--									<div class="container">--}}
{{--										<div class="mega-menubg hor-mega-menu">--}}
{{--											<div class="row">--}}
{{--        @foreach(\App\Models\Gender::all() as $gender)--}}
{{--            @foreach($gender->template_groups as $template_group)--}}
{{--        <div class="col-lg-3 col-md-12 col-xs-12 link-list">--}}
{{--            <ul class="p-0">--}}
{{--                <li>--}}
{{--                    <h3 class="fs-14 font-weight-bold mb-1 mt-2">--}}
{{--                        {{$template_group->name}}--}}
{{--                    @if ($gender->id == 1) Ж--}}
{{--                    @elseif ($gender->id == 2) M--}}
{{--                    @endif--}}
{{--                    </h3>--}}
{{--                </li>--}}
{{--                @foreach($template_group->templates as $template)--}}
{{--                <li>--}}
{{--                    <a href="{{url('offers?template_id='.$template->id)}}" class="slide-item">--}}
{{--                        {{$template->name}}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endforeach--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--        @endforeach--}}

{{--											</div>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--                                <a href="#" class="sub-icon">--}}
{{--                                    <div class="side-angle1"></div>--}}
{{--                                    <div class="side-angle2"></div>--}}
{{--                                    <div class="side-arrow"></div>--}}
{{--                                    <svg class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12--}}
{{--                                          13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7--}}
{{--                                          .37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0--}}
{{--                                          11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg>--}}
{{--                                    Размеры--}}
{{--                                    <i class="fe fe-chevron-down horizontal-icon"></i>--}}
{{--                                </a>--}}
{{--								<ul class="sub-menu">--}}
{{--                                    @foreach(\App\Models\Size::all() as $size)--}}
{{--									<li><a href="{{url("offers?size_id={$size->id}")}}"--}}
{{--                                           class="slide-item">{{$size->name}}</a></li>--}}
{{--                                    @endforeach--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--							<li><a href="#" class="sub-icon"><div class="side-angle1"></div><div--}}
{{--                                        class="side-angle2"></div><div class="side-arrow"></div><svg--}}
{{--                                        class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0--}}
{{--                                         24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13--}}
{{--                                         4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8--}}
{{--                                         16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2---}}
{{--                                         .9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg> Скачать прайс-лист <i class="fe--}}
{{--                                         fe-chevron-down horizontal-icon"></i></a>--}}
{{--								<ul class="sub-menu">--}}
{{--									<li><a href="{{url('profile')}}" class="slide-item">Profile</a></li>--}}
{{--									<li><a href="{{url('editprofile')}}" class="slide-item">Edit-profile</a></li>--}}
{{--									<li class="sub-menu-sub"><a href="#">Mail <span class="badge badge-pink side-badge">5</span></a>--}}
{{--										<ul class="sub-menu">--}}
{{--											<li><a href="{{url('mail-inbox')}}" class="slide-item">Mail-inbox</a></li>--}}
{{--											<li><a href="{{url('mail-compose')}}" class="slide-item">Mail-compose</a></li>--}}
{{--											<li><a href="{{url('mail-read')}}" class="slide-item">Mail-read</a></li>--}}
{{--											<li><a href="{{url('mail-settings')}}" class="slide-item">Mail-settings</a></li>--}}
{{--											<li><a href="{{url('chat')}}" class="slide-item">Chat</a></li>--}}
{{--										</ul>--}}
{{--									</li>--}}
{{--									<li class="sub-menu-sub"><a href="#">Forms <span class="badge badge-info side-badge">6</span></a>--}}
{{--										<ul class="sub-menu">--}}
{{--											<li><a class="slide-item" href="{{url('form-elements')}}">Form Elements</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-advanced')}}">Advanced Forms</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-layouts')}}">Form Layouts</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-validation')}}">Form Validation</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-wizards')}}">Form Wizards</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-editor')}}">Form Editor</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-elements-sizes')}}">Form Sizes</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-inputmask')}}">Input Mask</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('form-upload')}}">File Uploads</a></li>--}}
{{--										</ul>--}}
{{--									</li>--}}
{{--									<li class="sub-menu-sub"><a href="#">Blog</a>--}}
{{--										<ul class="sub-menu">--}}
{{--											<li><a class="slide-item" href="{{url('bloglist01')}}">Blog list 01</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('bloglist02')}}">Blog list 02</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('bloglist03')}}">Blog list 03</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('bloglist04')}}">Blog list 04</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('bloglist05')}}">Blog list 05</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('blog')}}">Blog Details</a></li>--}}
{{--										</ul>--}}
{{--									</li>--}}
{{--									<li class="sub-menu-sub"><a href="#">Icons</a>--}}
{{--										<ul class="sub-menu">--}}
{{--											<li><a class="slide-item" href="{{url('icons')}}">Fontawesome</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('icons2')}}">Simple line</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('icons3')}}">Feather</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('icons4')}}">Line Awesome</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('icons5')}}">Themify</a></li>--}}
{{--											<li><a class="slide-item" href="{{url('icons6')}}">Typicon Icons</a></li>--}}
{{--										</ul>--}}
{{--									</li>--}}
{{--									<li><a href="{{url('invoice')}}" class="slide-item">Invoice</a></li>--}}
{{--									<li><a href="{{url('todotask')}}" class="slide-item">Todotask</a></li>--}}
{{--									<li><a href="{{url('pricing')}}" class="slide-item">Pricing</a></li>--}}
{{--									<li><a href="{{url('gallery')}}" class="slide-item">Gallery</a></li>--}}
{{--									<li><a href="{{url('faq')}}" class="slide-item">Faqs</a></li>--}}
{{--									<li><a href="{{url('emptypage')}}" class="slide-item">Empty Page</a></li>--}}
{{--								</ul>--}}
{{--							</li>--}}
                            <li>
                                <a href="{{url('contacts')}}" class="">
                                    <div class="side-angle1"></div>
                                    <div class="side-angle2"></div>
                                    <div class="side-arrow"></div>
                                    <svg class="hor__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 19h14V5H5v14zm7-13c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3zM6 16.47c0-2.5 3.97-3.58 6-3.58s6 1.08 6 3.58V18H6v-1.53z" opacity=".3"/><path d="M12 12c1.65 0 3-1.35 3-3s-1.35-3-3-3-3 1.35-3 3 1.35 3 3 3zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7-5H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-1-2.53c0-2.5-3.97-3.58-6-3.58s-6 1.08-6 3.58V18h12v-1.53zM8.31 16c.69-.56 2.38-1.12 3.69-1.12s3.01.56 3.69 1.12H8.31z"/></svg>
                                    Контакты </a>
                            </li>
<li>
    <a href="{{route('shop.basket')}}"><livewire:shop.cart.basket-button/></a>
</li>
						</ul>
                        <span>

                        </span>
					</nav>

					<!--Nav-->
				</div>
			</div>
		</div>
		<!--Horizontal-main -->
