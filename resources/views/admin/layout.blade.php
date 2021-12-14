<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<title>ConcoreAcademics</title>
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{asset('backend/media/logos/logo.png')}}" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->

	<link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			@include('admin.body.sidebar')
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				
				<!--begin::Header-->
				@include('admin.body.header')
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
										@yield('admin')
						</div>
					</div>
				</div>
			</div>
			@include('admin.body.footer')

			<!--begin::Javascript-->
			<!--begin::Global Javascript Bundle(used by all pages)-->
			<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
			<script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
			<!--end::Global Javascript Bundle-->
			<!--begin::Page Vendors Javascript(used by this page)-->
			<script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
			<!--end::Page Vendors Javascript-->
			<!--begin::Page Custom Javascript(used by this page)-->
			<script src="{{asset('backend/js/custom/widgets.js')}}"></script>
			<script src="{{asset('backend/js/custom/apps/chat/chat.js')}}"></script>
			<script src="{{asset('backend/js/custom/modals/create-app.js')}}"></script>
			<script src="{{asset('backend/js/custom/modals/upgrade-plan.js')}}"></script>
			<!--end::Page Custom Javascript-->
			<!--end::Javascript-->
		</div>
	</div>
</body>
<!--end::Body-->

</html>