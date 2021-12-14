@extends('admin.layout')

@section('admin')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xl" id="kt_content_container">

							<div class="tab-content">
								<!--begin::Tab pane-->
								<!--end::Tab pane-->
								<!--begin::Tab pane-->
								<div id="kt_project_users_table_pane">
									<!--begin::Card-->
									<div class="card card-flush">
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
													<!--begin::Head-->
													<thead class="fs-7 text-gray-400 text-uppercase">
														<tr>
															<th class="min-w-40px">SL</th>
															<th class="min-w-250px">Tutor Name</th>
															<th class="min-w-100px">University</th>
															<th class="min-w-80px">Date</th>
															<th class="min-w-90px">Amount</th>
															<th class="min-w-100px">Role</th>
															<th class="min-w-60px">Action</th>

														</tr>
													</thead>
													<!--end::Head-->
													<!--begin::Body-->
													<tbody class="fs-6">
														@foreach($allData as $key => $user)
														<tr>
														<td>{{$key+1}}</td>
															<td>
																<!--begin::User-->
																<div class="d-flex align-items-center">
																	<!--begin::Wrapper-->
																	<div class="me-5 position-relative">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle">
																			<img alt="" src="{{url('backend/media/avatars/150-3.jpg')}}" />
																		</div>
																		<!--end::Avatar-->
																	</div>
																	<!--end::Wrapper-->
																	<!--begin::Info-->
																	<div class="d-flex flex-column justify-content-center">
																		<a href="{{route('user')}}" class="mb-1 text-gray-800 text-hover-primary">{{$user->name}}</a>
																		<div class="fw-bold fs-6 text-gray-400">{{$user->email}}</div>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::User-->
															</td>
															<td>University</td>
															<td>Apr 15, 2021</td>
															
															<td></td>
															<td></td>
															<td>
																<a href="#" class="btn btn-light btn-sm">View</a>
															</td>
														</tr>
														@endforeach
													</tbody>
													<!--end::Body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<div class="d-flex flex-stack flex-wrap pt-10">
										<div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
										<!--begin::Pages-->
										<ul class="pagination">
											<li class="page-item previous">
												<a href="#" class="page-link">
													<i class="previous"></i>
												</a>
											</li>
											<li class="page-item active">
												<a href="#" class="page-link">1</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">2</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">3</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">4</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">5</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">6</a>
											</li>
											<li class="page-item next">
												<a href="#" class="page-link">
													<i class="next"></i>
												</a>
											</li>
										</ul>
										<!--end::Pages-->
									</div>
								<!--end::Tab pane-->
							</div>
							<!--end::Tab Content-->
						</div>
						<!--end::Container-->
					</div>
@endsection