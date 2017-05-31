<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
{{--	<title>@if($categories_data[$type]->getTranslate('meta_title')){{ $categories_data[$type]->getTranslate('meta_title') }} @else DayProject @endif</title>
	<meta name="description" content="@if($categories_data[$type]->getTranslate('meta_description')){{ $categories_data[$type]->getTranslate('meta_description') }} @else ДЕНЬ project - проект вашого простору @endif">
	<meta name="keywords" content="@if($categories_data[$type]->getTranslate('meta_keywords')){{ $categories_data[$type]->getTranslate('meta_keywords') }} @else DayProject @endif">--}}

	{{-- CSS --}}
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">


	<link href="{{ asset('/libs/normalize.css/normalize.css') }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{ asset('/css/frontend/animate.css') }}" rel="stylesheet" type="text/css" media="all">

	<link href="{{ asset('/libs//owl-carousel-2/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('/css/frontend/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('/css/frontend/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}" rel="stylesheet" type="text/css" media="all" />
	{{-- /CSS --}}
	{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}
</head>

<body>
<div class="normal">
	<header class="header clearfix">
		<div class="wrapper">
			<ul class="lang">
				<li @if(App::getLocale() == 'en') class="lang_item"@endif><a href="{{str_replace(url(App::getLocale()), url('en'), Request::url())}}">eng</a></li>
				<li @if(App::getLocale() == 'ua') class="lang_item"@endif><a class="active" href="{{str_replace(url(App::getLocale()), url('ua'), Request::url())}}">ukr</a></li>
			</ul>
			<a href="#" class="logo" data-page-num="2"><img src="/img/frontend/logo.png" alt=""></a>
		</div>
	</header>

	<div class="content">
		<div class="content-wrap">
			<div class="block-content block_about">
				<div class="about_desc">
					<div class="about-info">
						<p>День, який випромінює світло і тепло. День, який приносить задоволення.</p>
						<p>Це все ДЕНЬ project - проект вашого простору, в якому хочеться</p>
						<p>прокидатися, працювати, відпочивати.</p>
						<p>Функціональне, комфортне, практичне рішення вашого інтер'єру.</p>
						<p>Ми команда професіоналів, яка розуміє ваші потреби і втілює їх в життя.</p>
					</div>
				</div>
			</div>
			<div class="block-content block_project">
				<div class="project-item" data-id="p1" style="background-image: url('/img/frontend/proekt_1/project_1_1.jpg');">
					<div class="project-item_name">
						<span class="project-item_name-text">Corea</span>
					</div>
				</div>
				<div class="project-item" data-id="p2" style="background-image: url('/img/frontend/proekt_2/project_2_1.jpg');">
					<div class="project-item_name">
						<span class="project-item_name-text">Book</span>
					</div>
				</div>
				<div class="project-item" data-id="p3" style="background-image: url('/img/frontend/proekt_3/project_3_1.jpg');">
					<div class="project-item_name">
						<span class="project-item_name-text">Book</span>
					</div>
				</div>
				<div class="project-item" data-id="p4" style="background-image: url('/img/frontend/proekt_4/project_4_1.jpg');">
					<div class="project-item_name">
						<span class="project-item_name-text">Book</span>
					</div>
				</div>
				<div id="project-carousel-p1" class="r-carousel-wrap">
					<div class="owl-carousel owl-theme">
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_1.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_2.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_3.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_4.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_5.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_6.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_7.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_1/project_1_8.jpg" alt="">
						</div>
					</div>
				</div>
				<div id="project-carousel-p2" class="r-carousel-wrap">
					<div class="owl-carousel owl-theme">
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_1.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_2.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_3.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_4.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_5.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_6.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_7.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_8.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_9.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_2/project_2_10.jpg" alt="">
						</div>
					</div>
				</div>
				<div id="project-carousel-p3" class="r-carousel-wrap">
					<div class="owl-carousel owl-theme">
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_1.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_2.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_3.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_4.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_5.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_6.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_3/project_3_7.jpg" alt="">
						</div>
					</div>
				</div>
				<div id="project-carousel-p4" class="r-carousel-wrap">
					<div class="owl-carousel owl-theme">
						<div class="gallery-item">
							<img src="/img/frontend/proekt_4/project_4_1.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_4/project_4_2.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_4/project_4_3.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_4/project_4_4.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/proekt_4/project_4_5.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="block-content block_subject">
				<div class="project-item" data-id="s1" style="background-image: url('/img/frontend/predmety_1/subject_1_1.jpg');">
					<div class="project-item_name">
						<span class="project-item_name-text">Towers</span>
					</div>
				</div>
				<div id="project-carousel-s1" class="r-carousel-wrap">
					<div class="owl-carousel owl-theme">
						<div class="gallery-item">
							<img src="/img/frontend/predmety_1/subject_1_1.jpg" alt="">
						</div>
						<div class="gallery-item">
							<img src="/img/frontend/predmety_1/subject_1_2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="block-content block_contact">
				<div class="contact_desc">
					<div class="contact-info">
						Київ, Україна <br>
						тел.: +38 (096) 598 76 07 <br>
						dayprojecton@gmail.com <br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="wrapper">
			<ul class="soc">
				<li class="soc_item"><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
				<li class="soc_item"><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
			</ul>
		</div>
	</footer>

	<div class="sidebar sidebar_left">
		<ul class="nav">
			<li><a href="#" data-page-num="1" class="nav_item"><img src="/img/frontend/pro_nas.png" alt=""></a></li>
			<li><a href="#" data-page-num="2" class="nav_item active"><img src="/img/frontend/proekty.png" alt=""></a></li>
			<li><a href="#" data-page-num="3" class="nav_item"><img src="/img/frontend/predmety.png" alt=""></a></li>
			<li><a href="#" data-page-num="4" class="nav_item"><img src="/img/frontend/contact.png" alt=""></a></li>
		</ul>
	</div>

	<div class="sidebar sidebar_right">
		<div class="sidebar_right_wrap">
			<div class="arrow-back_wrap clearfix">
				<div class="arrow-back" title="Назад"></div>
			</div>
			<ul class="arrow-gallery">
				<li class="arrow-gallery-up" title="Вверх"></li>
				<li class="arrow-gallery-down" title="Вниз"></li>
			</ul>
			<ul class="arrow">
				<li class="arrow-up" title="Вверх"></li>
				<li class="arrow-down" title="Вниз"></li>
			</ul>
			<ul class="pagination">
				<li><a href="#" data-page-num="1" class="pag_item"><i class="minus"></i><span class="page-num">01</span></a></li>
				<li><a href="#" data-page-num="2" class="pag_item active"><i class="minus"></i><span class="page-num active">02</span></a></li>
				<li><a href="#" data-page-num="3" class="pag_item"><i class="minus"></i><span class="page-num">03</span></a></li>
				<li><a href="#" data-page-num="4" class="pag_item"><i class="minus"></i><span class="page-num">04</span></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="mob">

	<ul class="mob-nav">
		<li><a href="index.html">Про нас</a></li>
		<li><a href="project.html">Проекти</a></li>
		<li><a href="subject.html">Предмети</a></li>
		<li><a href="contact.html">Контакти</a></li>
	</ul>
	<div class="button-menu"><div class="menu-i icon"></div>MENU</div>
	<div class="mob-header clearfix">
		<ul class="mob-lang">
			<li class="mob-lang_item"><a @if(App::getLocale() == 'en')class="active"@endif href="{{str_replace(url(App::getLocale()), url('en'), Request::url())}}">eng</a></li>
			<li class="mob-lang_item"><a  @if(App::getLocale() == 'ua')class="active"@endif href="{{str_replace(url(App::getLocale()), url('ua'), Request::url())}}">ukr</a></li>
		</ul>
		<img src="/img/frontend/logo.png" alt="DayProject"></a>
	</div>
	<div id="about" class="mob-block-content mob-block_about">
		<h2 class="mob-block_header mob-block_header-about">About us</h2>
		<div class="mob-about_desc">
			<p>День, який випромінює світло і тепло. День, який приносить задоволення.</p>
			<p>Це все ДЕНЬ project - проект вашого простору, в якому хочеться</p>
			<p>прокидатися, працювати, відпочивати.</p>
			<p>Функціональне, комфортне, практичне рішення вашого інтер'єру.</p>
			<p>Ми команда професіоналів, яка розуміє ваші потреби і втілює їх в життя.</p>
		</div>
	</div>

</div>

@yield('content')





<input type="hidden" name="url" value="/{{ App::getLocale() }}/contact"/>
{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--Файл переводов--}}
{{-- JS --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
	<script src="{{ asset('/libs/owl-carousel-2/owl.carousel.js') }}"></script>
	<script src="{{ asset('/js/frontend/common.js') }}?ver={{ $version }}"></script>
	<script src="{{ asset('/libs/owl-carousel/owl.carousel.min.js') }}"></script>


{{-- JS --}}
</body>
</html>