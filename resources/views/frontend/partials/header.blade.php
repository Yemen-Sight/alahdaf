@php
    $home_page_variant = $home_page ?? filter_static_option_value('home_page_variant',$global_static_field_data);
@endphp
<!DOCTYPE html>
    <html lang="en"  dir="{{get_user_lang_direction()}}">

<head>
    @if(!empty(filter_static_option_value('site_google_analytics',$global_static_field_data)))
    {!! get_static_option('site_google_analytics') !!}
    @endif
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! render_favicon_by_id(filter_static_option_value('site_favicon',$global_static_field_data)) !!}
    {!! load_google_fonts() !!}
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon_package/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"  href="{{asset('assets/favicon_package/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_package/favicon-16x16.png">
    <link rel="manifest" href="{{asset('assets/favicon_package/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicon_package/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor"  content="#da532c">
    <meta name="theme-color"  content="#ffffff">
    <!-- Almarai Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" />
    <!-- custom style -->
    <link rel="stylesheet"  href="{{asset('assets/frontend/css/style.css')}}" />
    @include('frontend.partials.og-meta')
</head>

<body>
    <!-- Header - Star -->
    <header class="header">

        <!-- navbar - Start -->
        <nav class="navbar navbar-expand-sm position-fixed w-100 pt-3 flex-nowrap">
            <div class="sidebar__icon">
                <span class="sidebar__icon--line"></span>
            </div>
            <div class="container-fluid">
                <a href="{{url('/')}}" class="navbar-brand">
                    @if(!empty(filter_static_option_value('site_white_logo',$global_static_field_data)))
                        {!! render_image_markup_by_attachment_id(filter_static_option_value('site_white_logo',$global_static_field_data),'navbar__logo') !!}
                    @else
                        <h2 class="site-title">{{filter_static_option_value('site_'.$user_select_lang_slug.'_title',$global_static_field_data)}}</h2>
                    @endif
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/"
                            class=" nav-btn fully-rounded--rose">
                            بوابة الخدمــات الالكترونية
                        </a>
                    </li>
                  
                    <li class="nav-item text-center">
                        <a class="nav-btn">
                        
                            @foreach($all_language as $lang)
                                 @if($user_select_lang_slug == $lang->slug) 
                                 {{$lang->name}}
                                 @endif 
                                      
                            @endforeach
                        
                         </a>
                    </li>
                
                
                </ul>

            </div>
        </nav>
        <!-- navbar - End -->
    </header>
    <!-- Header - End -->
    <main class="main">
        <!-- Hero Content Section - Start -->
        <section class="hero">
            <!-- Carousel - Start -->
            
            <div class=" carousel slide h-100"
                id="slider"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button"
                        data-bs-target="#slider"
                        data-bs-slide-to="0"
                        class="active slide__btn"
                        aria-label="Slide 1"
                        aria-current="true"></button>
                    <button type="button"
                        data-bs-target="#slider"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                        class=" slide__btn"></button>
                    <button type="button"
                        data-bs-target="#slider"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                        class=" slide__btn"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="slide__img d-block w-100"
                            src="{{asset('assets/main-bg.jpg')}}" />
                        <div class="hero-content carousel-caption  container col-sm-12">
                            <div class="col-lg-9 col-md-10 text-start text-light">
                                <h1 class="hero-content__title text-end mb-5 fw-bolder">شركة الأهداف
                                    العربية للتجارة
                                    العالمية
                                </h1>
                                <p class=" col-lg-12 hero-content__body text-end h3 mb-4">هناك حقيقة مثبتة منذ
                                    زمن طويل
                                    وهي أن
                                    المحتوى المقروء
                                    لصفحة ما
                                    سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة
                                    التي يقرأها.
                                </p>
                                <a href="#products"
                                    class="btn text-md-start">المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="slide__img d-block w-100" src="{{asset('assets/main-bg.jpg')}}" />
                        <div class="hero-content carousel-caption  container col-sm-12">
                            <div class="col-lg-9 col-md-10 text-start text-light">
                                <h1 class="hero-content__title text-end mb-5 fw-bolder">شركة الأهداف
                                    العربية للتجارة
                                    العالمية
                                </h1>
                                <p class=" col-lg-12 hero-content__body text-end h3 mb-4">هناك حقيقة مثبتة منذ
                                    زمن طويل
                                    وهي أن
                                    المحتوى المقروء
                                    لصفحة ما
                                    سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة
                                    التي يقرأها.
                                </p>
                                <a href="#products"
                                    class="btn text-md-start">المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="slide__img d-block w-100"
                            src="{{asset('assets/main-bg.jpg')}}" />
                        <div class="hero-content carousel-caption  container col-sm-12">
                            <div class="col-lg-9 col-md-10 text-start text-light">
                                <h1 class="hero-content__title text-end mb-5 fw-bolder">شركة الأهداف
                                    العربية للتجارة
                                    العالمية
                                </h1>
                                <p class=" col-lg-12 hero-content__body text-end h3 mb-4">هناك حقيقة مثبتة منذ
                                    زمن طويل
                                    وهي أن
                                    المحتوى المقروء
                                    لصفحة ما
                                    سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة
                                    التي يقرأها.
                                </p>
                                <a href="#products"
                                    class="btn text-md-start">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('write_blog')
        </section>
    
      
