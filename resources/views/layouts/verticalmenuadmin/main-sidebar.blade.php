		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{url('admin/')}}">
					<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo logo-color1" alt="logo">
				</a>
				<a class="desktop-logo logo-dark active" href="{{url('admin/')}}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<div class="app-sidebar__toggle" data-toggle="sidebar">
					<a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
					<a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
				</div>
			</div>
			<div class="main-sidemenu sidebar-scroll">
				<ul class="side-menu">
					<li><h3>Каталог</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('admin/')}}"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg>
						<span class="side-menu__label">Главная</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
						<span class="side-menu__label">Номенклатура</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
                            @foreach($main_menu['tables'] as $route => $name)
							<li>
                                <a class="slide-item"
                               href="{{route($route)}}">
                                    {{$name}}
                                </a>
                            </li>
                            @endforeach
						</ul>
					</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg>
                            <span class="side-menu__label">Прайс-листы</span><i class="angle fe
                            fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            @foreach($main_menu['price'] as $route => $name)
                                <li>
                                    <a class="slide-item"
                                       href="{{route($route)}}">
                                        {{$name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg>
                            <span class="side-menu__label">Категории</span><i class="angle fe
                            fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            @foreach($main_menu['category'] as $route => $name)
                                <li>
                                    <a class="slide-item"
                                       href="{{route($route)}}">
                                        {{$name}}
                                    </a>
                                    <livewire:admin.crud.category.listing/>
                                </li>
                            @endforeach
                        </ul>
{{--                    <div class="card">--}}

{{--                    </div>--}}
                    </li>
                </ul>
			</div>
		</aside>
		<!-- main-sidebar -->
