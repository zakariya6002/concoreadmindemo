@extends('admin.layout')

@section('admin')
<div class="card mb-5 mb-xxl-8">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
												<img src="{{url('backend/media/avatars/150-26.jpg')}}" alt="image" />
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<!--begin::Name-->
													<div class="d-flex align-items-center mb-2">
														<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Max Smith</a>
														<a href="#">
															<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																	<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
													<!--end::Name-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->High School Tutor</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
																<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->SF, Bay Area</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
														<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->max@kt.com</a>
													</div>
													<!--end::Info-->
												</div>
												<!--end::User-->
												<!--begin::Actions-->
												<div class="d-flex my-4">
													<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
													<!--begin::Menu-->
													<div class="me-0">
														<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="bi bi-three-dots fs-3"></i>
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Title-->
											<!--begin::Stats-->
											<div class="d-flex flex-wrap flex-stack">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Earnings</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																		<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="80">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Projects</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-bold fs-6 text-gray-400">Success Rate</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Progress-->
												<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-bold fs-6 text-gray-400">Profile Compleation</span>
														<span class="fw-bolder fs-6">50%</span>
													</div>
													<div class="h-5px mx-3 w-100 bg-light mb-3">
														<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Details-->
									<!--begin::Navs-->
									<div class="d-flex overflow-auto h-55px">
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary me-6 active" href="../../demo7/dist/pages/profile/overview.html">Overview</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary me-6" href="../../demo7/dist/pages/profile/projects.html">Projects</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<!-- <li class="nav-item">
												<a class="nav-link text-active-primary me-6" href="../../demo7/dist/pages/profile/campaigns.html">Campaigns</a>
											</li> -->
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary me-6" href="{{route('doc')}}">Documents</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<!-- <li class="nav-item">
												<a class="nav-link text-active-primary me-6" href="../../demo7/dist/pages/profile/connections.html">Connections</a>
											</li> -->
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<!-- <li class="nav-item">
												<a class="nav-link text-active-primary me-6" href="../../demo7/dist/pages/profile/activity.html">Activity</a>
											</li> -->
											<!--end::Nav item-->
										</ul>
									</div>
									<!--begin::Navs-->
								</div>
							</div>
							<div class="card mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Clients Statistics</span>
										<span class="text-muted mt-1 fw-bold fs-7">Over 500 new members</span>
									</h3>
									<div class="card-toolbar">
										<!--begin::Menu-->
										<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
														<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
														<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
														<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--begin::Menu 2-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mb-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Ticket</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Customer</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
												<!--begin::Menu item-->
												<a href="#" class="menu-link px-3">
													<span class="menu-title">New Group</span>
													<span class="menu-arrow"></span>
												</a>
												<!--end::Menu item-->
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Admin Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Staff Group</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Member Group</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">New Contact</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator mt-3 opacity-75"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3 py-3">
													<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 2-->
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body py-3">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table align-middle gs-0 gy-4">
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bolder text-muted bg-light">
													<th class="ps-4 min-w-300px rounded-start">Agent</th>
													<th class="min-w-125px">Earnings</th>
													<th class="min-w-125px">Comission</th>
													<th class="min-w-200px">Company</th>
													<th class="min-w-150px">Rating</th>
													<th class="min-w-200px text-end rounded-end"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<span class="symbol-label bg-light">
																	<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																</span>
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
															</div>
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$5,400</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Intertico</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
													</td>
													<td>
														<div class="rating">
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
														</div>
														<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<span class="symbol-label bg-light">
																	<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																</span>
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron Wayde</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
															</div>
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,750,000</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$7,400</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Agoda</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
													</td>
													<td>
														<div class="rating">
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
														</div>
														<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Above Avarage</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<span class="symbol-label bg-light">
																	<img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt="" />
																</span>
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
															</div>
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">In Proccess</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,500</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">RoadGee</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<div class="rating">
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
														</div>
														<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<span class="symbol-label bg-light">
																	<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																</span>
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
															</div>
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$700,000</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$7,760</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">The Hill</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
													</td>
													<td>
														<div class="rating">
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
														</div>
														<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Avarage</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<span class="symbol-label bg-light">
																	<img src="assets/media/svg/avatars/020-girl-11.svg" class="h-75 align-self-end" alt="" />
																</span>
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
															</div>
														</div>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$1,320,000</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$6,250</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
													</td>
													<td>
														<a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Intertico</a>
														<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
													</td>
													<td>
														<div class="rating">
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
															<div class="rating-label me-2 checked">
																<i class="bi bi-star-fill fs-5"></i>
															</div>
														</div>
														<span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
													</td>
													<td class="text-end">
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
														<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--begin::Body-->
							</div>
@endsection