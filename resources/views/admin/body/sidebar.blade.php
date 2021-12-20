<div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
	<!--begin::Primary-->
	<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
		<!--begin::Logo-->
		<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
			<a href="#">
				<img alt="Logo" src="{{asset('backend/media/logos/logo.png')}}" class="h-35px" />
			</a>
		</div>
		<!--end::Logo-->
		<!--begin::Nav-->
		<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
			<!--begin::Wrapper-->
			<div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
				<!--begin::Nav-->
				<ul class="nav flex-column">
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Dashboard">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light active" href="{{route('dashboard')}}">
							<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Tutors">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"  href="{{route('users')}}">
							<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
									<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Jobs">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light"  href="{{route('jobs.index')}}">
							<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
									<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
									<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
									<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Sessions">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" href="{{route('sessions.index')}}">
							<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
									<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Authors">
						<!--begin::Nav link-->
						<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_authors">
							<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--end::Nav link-->
					</li>
					<!--end::Nav item-->
				</ul>
				<!--end::Tabs-->
			</div>
			<!--end::Nav-->
		</div>
		<!--end::Nav-->
		<!--begin::Footer-->
		<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
			<!--begin::Quick links-->
			
			<!--end::Quick links-->
			<!--begin::Activities-->
			<div class="d-flex align-items-center mb-3">
				<!--begin::Drawer toggle-->
				<div class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Activity Logs" id="kt_activities_toggle">
					<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
					<span class="svg-icon svg-icon-2 svg-icon-lg-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
							<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
							<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
							<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::drawer toggle-->
			</div>
			<!--end::Activities-->
			<!--begin::Notifications-->
			<div class="d-flex align-items-center mb-2">
				<!--begin::Menu wrapper-->
				<div class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
					<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
					<span class="svg-icon svg-icon-2 svg-icon-lg-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
							<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--begin::Menu-->
				
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::Notifications-->
			<!--begin::User-->
			<div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
				<!--begin::Menu wrapper-->
				<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="User profile">
					<img src="{{asset('backend/media/avatars/150-26.jpg')}}" alt="image" />
				</div>
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="{{asset('backend/media/avatars/150-26.jpg')}}" />
							</div>
							<!--end::Avatar-->
							<!--begin::Username-->
							<div class="d-flex flex-column">
								<div class="fw-bolder d-flex align-items-center fs-5">Zakariya
									<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
								</div>
								<a href="#" class="fw-bold text-muted text-hover-primary fs-7">zhassan@dariopro.co.za</a>
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo7/dist/account/overview.html" class="menu-link px-5">My Profile</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo7/dist/pages/projects/list.html" class="menu-link px-5">
							<span class="menu-text">My Projects</span>
							<span class="menu-badge">
								<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
							</span>
						</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
						<a href="#" class="menu-link px-5">
							<span class="menu-title">My Subscription</span>
							<span class="menu-arrow"></span>
						</a>
						<!--begin::Menu sub-->
						<div class="menu-sub menu-sub-dropdown w-175px py-4">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo7/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo7/dist/account/billing.html" class="menu-link px-5">Billing</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo7/dist/account/statements.html" class="menu-link px-5">Payments</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo7/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content px-3">
									<label class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
										<span class="form-check-label text-muted fs-7">Notifications</span>
									</label>
								</div>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu sub-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="../../demo7/dist/account/statements.html" class="menu-link px-5">My Statements</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
						<a href="#" class="menu-link px-5">
							<span class="menu-title position-relative">Language
								<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
									<img class="w-15px h-15px rounded-1 ms-2" src="{{asset('backend/media/flags/united-states.svg')}}" alt="" /></span></span>
						</a>
						<!--begin::Menu sub-->
						<div class="menu-sub menu-sub-dropdown w-175px py-4">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link d-flex px-5 active">
									<span class="symbol symbol-20px me-4">
										<img class="rounded-1" src="{{asset('backend/media/flags/united-states.svg')}}" alt="" />
									</span>English</a>
							</div>
						</div>
						<!--end::Menu sub-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5 my-1">
						<a href="../../demo7/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="{{route('Logout')}}" class="menu-link px-5">Sign Out</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<div class="menu-content px-5">
							<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
								<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo7/dist/index.html" />
								<span class="pulse-ring ms-n1"></span>
								<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
							</label>
						</div>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::User-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Primary-->
</div>