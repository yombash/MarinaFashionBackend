        <div class="sticky sticky-top">
		<div class="main-header nav nav-item hor-header">
			<div class="container">
				<div class="main-header-left ">
					<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
					<a class="header-brand" href="{{url('/')}}">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="img-fluid"
                             alt="marina_logo">
					</a>

				</div><!-- search -->
				<div class="main-header-right">
					<div class="nav nav-item  navbar-nav-right ml-auto">
						<div class="nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link resp-btn">
											<i class="fe fe-search"></i>
										</button>
									</span>
								</div>
							</form>
						</div>
                        <div class="main-header-search d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <h1>
                            <livewire:shop.cart.busket-button/>
                            </h1>
                        </div>
{{--                        <livewire:basket-button>--}}
{{--						<div class="main-header-search ml-0 d-sm-none d-none d-lg-block">--}}
{{--							<input class="form-control shadow" id="search-input" placeholder="Search for anything..." type="text"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>--}}
{{--						</div>--}}
{{--						<div class="dropdown nav-item main-header-notification">--}}
{{--							<a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>--}}
{{--							<div class="dropdown-menu">--}}
{{--								<div class="menu-header-content bg-primary text-left d-flex">--}}
{{--									<div class="">--}}
{{--										<h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>--}}
{{--									</div>--}}
{{--									<div class="my-auto ml-auto">--}}
{{--										<span class="badge badge-pill badge-warning float-right">Mark All Read</span>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="main-notification-list Notification-scroll ps">--}}
{{--									<a class="d-flex p-3 border-bottom" href="#">--}}
{{--										<div class="notifyimg bg-success-transparent">--}}
{{--											<i class="la la-shopping-basket text-success"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">New Order Received</h5>--}}
{{--											<div class="notification-subtext">1 hour ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<a class="d-flex p-3 border-bottom" href="#">--}}
{{--										<div class="notifyimg bg-danger-transparent">--}}
{{--											<i class="la la-user-check text-danger"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">22 verified registrations</h5>--}}
{{--											<div class="notification-subtext">2 hour ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<a class="d-flex p-3 border-bottom" href="#">--}}
{{--										<div class="notifyimg bg-primary-transparent">--}}
{{--											<i class="la la-check-circle text-primary"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">Project has been approved</h5>--}}
{{--											<div class="notification-subtext">4 hour ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<a class="d-flex p-3 border-bottom" href="#">--}}
{{--										<div class="notifyimg bg-pink-transparent">--}}
{{--											<i class="la la-file-alt text-pink"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">New files available</h5>--}}
{{--											<div class="notification-subtext">10 hour ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<a class="d-flex p-3 border-bottom" href="#">--}}
{{--										<div class="notifyimg bg-warning-transparent">--}}
{{--											<i class="la la-envelope-open text-warning"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">New review received</h5>--}}
{{--											<div class="notification-subtext">1 day ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<a class="d-flex p-3" href="#">--}}
{{--										<div class="notifyimg bg-purple-transparent">--}}
{{--											<i class="la la-gem text-purple"></i>--}}
{{--										</div>--}}
{{--										<div class="ml-3">--}}
{{--											<h5 class="notification-label mb-1">Updates Available</h5>--}}
{{--											<div class="notification-subtext">2 days ago</div>--}}
{{--										</div>--}}
{{--										<div class="ml-auto">--}}
{{--											<i class="las la-angle-right text-right text-muted"></i>--}}
{{--										</div>--}}
{{--									</a>--}}
{{--									<div class="dropdown-footer">--}}
{{--										<a href="">VIEW ALL</a>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="dropdown main-profile-menu nav nav-item nav-link">--}}
{{--							<a class="profile-user d-flex" href=""><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}">--}}
{{--								<div class="p-text d-none">--}}
{{--									<span class="p-name font-weight-bold">Mintrona Pechon</span>--}}
{{--									<small class="p-sub-text">Premium Member</small>--}}
{{--								</div>--}}
{{--							</a>--}}
{{--							<div class="dropdown-menu">--}}
{{--								<div class="main-header-profile header-img">--}}
{{--									<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>--}}
{{--									<h6>Mintrona Pechon</h6><span>Premium Member</span>--}}
{{--								</div>--}}
{{--								<a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>--}}
{{--								<a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>--}}
{{--								<a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>--}}
{{--								<a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account Settings</a>--}}
{{--								<a class="dropdown-item" href="{{url('signin')}}"><i class="fas fa-sign-out-alt"></i> Sign Out</a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="dropdown main-header-message right-toggle">--}}
{{--							<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">--}}
{{--								<i class="ion ion-md-menu tx-20 bg-transparent"></i>--}}
{{--							</a>--}}
{{--						</div>--}}
					</div>
				</div>
			</div>
		</div>
		<!-- main-header closed -->
        </div>
