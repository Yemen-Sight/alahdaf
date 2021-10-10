@extends('frontend.frontend-master')
@php
  $post_img = null;
  $blog_image = get_attachment_image_by_id($blog_post->image,"full",false);
  $post_img = !empty($blog_image) ? $blog_image['img_url'] : '';
 @endphp

@section('og-meta')
    <meta property="og:url"  content="{{route('frontend.blog.single',$blog_post->slug)}}" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="{{$blog_post->title}}" />
    <meta property="og:image" content="{{$post_img}}" />
@endsection
@section('page-meta-data')
    <meta name="description" content="{{$blog_post->meta_description}}">
    <meta name="tags" content="{{$blog_post->meta_tag}}">
@endsection
@section('site-title')
    {{$blog_post->title}}
@endsection
@section('page-title')
    {{$blog_post->title}}
@endsection

@section('write_blog')
<div class="col-12 bg-primary bg-opacity-50 position-absolute bottom-0 d-flex justify-content-center gap-5 p-3 text-light">
    <h1 class="fw-bolder">اكتب مقالتك الان</h1>
    <a href=""
        class="fully-rounded-bg--rose h3 text-light text-decoration-none px-5 py-2 me-5">
        اكتب
    </a>
    </div>
@endsection
@section('content')
 


</section>
<!-- Hero Content Section - End -->

<!-- Article Section - Start -->
<section class="article bg-light pb-5">
<div class="container">
<div class="route my-5 h4">
    
      
    <a class="text-decoration-none text-muted fw-lighter" href="{{url('/')}}">{{__('Home')}}</a>
                        @php
                        $pages_list = ['blog','work','service','product','career_with_us','events','knowledgebase','donation','appointment','courses'];
                        @endphp
                        @foreach($pages_list as $page)
                            @if(request()->is(get_static_option($page.'_page_slug').'/*'))
                           / <a class="text-decoration-none text-muted fw-lighter" href="{{url('/').'/'.get_static_option($page.'_page_slug')}}"> {{get_static_option($page.'_page_' . $user_select_lang_slug . '_name')}}</a>
                            @endif
                        @endforeach
</div>
<div class="row">
    <div class="right-side col-sm-12 col-md-8 bg-white px-0">

        <ul class="nav nav-tabs"
            id="myTab"
            role="tablist">
            <li class="nav-item "
                role="presentation">
                <button class="nav-link h2 active"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#home"
                    type="button"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true">الكل</button>
            </li>
            <li class="nav-item "
                role="presentation">
                <button class="nav-link h2"
                    id="category-1-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#category-1"
                    type="button"
                    role="tab"
                    aria-controls="category-1"
                    aria-selected="false">فئه</button>
            </li>
            <li class="nav-item "
                role="presentation">
                <button class="nav-link h2"
                    id="category-2-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#category-2"
                    type="button"
                    role="tab"
                    aria-controls="category-2"
                    aria-selected="false">فئه</button>
            </li>
        </ul>
        <div class="tab-content"
            id="myTabContent">
            <div class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab">

                <div class="container">
                    <div class="row">
                        <div class="col-3 my-4">
                            <h1 class="text-center text-md-end text-muted fw-bolder">اخر المقالات</h1>
                        </div>
                        <div class="col-9 my-4">
                            <div class="search-box">
                                <input type="text"
                                    id="gsearch"
                                    name="gsearch"
                                    placeholder="ابحث">
                                <div class="search-box-search-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-50 h-75"
                                        viewBox="0 0 29.934 29.932">
                                        <g transform="translate(0)">
                                            <path
                                                d="M23.384,23.384a1.871,1.871,0,0,1,2.647,0l7.2,7.2a1.871,1.871,0,0,1-2.645,2.647l-7.2-7.2a1.871,1.871,0,0,1,0-2.647Z"
                                                transform="translate(-3.849 -3.848)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                            <path
                                                d="M12.16,22.45A10.289,10.289,0,1,0,1.871,12.16,10.289,10.289,0,0,0,12.16,22.45ZM24.32,12.16A12.16,12.16,0,1,1,12.16,0,12.16,12.16,0,0,1,24.32,12.16Z"
                                                transform="translate(0 0)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="container">
                        <div class="row">

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-2.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-3.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-2.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-3.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-2.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-3.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade"
                id="category-1"
                role="tabpanel"
                aria-labelledby="category-1-tab">

                <div class="container">
                    <div class="row">
                        <div class="col-3 my-4">
                            <h1 class="text-center text-md-end text-muted fw-bolder">اخر المقالات</h1>
                        </div>
                        <div class="col-9 my-4">
                            <div class="search-box">
                                <input type="text"
                                    id="gsearch"
                                    name="gsearch"
                                    placeholder="ابحث">
                                <div class="search-box-search-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-50 h-75"
                                        viewBox="0 0 29.934 29.932">
                                        <g transform="translate(0)">
                                            <path
                                                d="M23.384,23.384a1.871,1.871,0,0,1,2.647,0l7.2,7.2a1.871,1.871,0,0,1-2.645,2.647l-7.2-7.2a1.871,1.871,0,0,1,0-2.647Z"
                                                transform="translate(-3.849 -3.848)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                            <path
                                                d="M12.16,22.45A10.289,10.289,0,1,0,1.871,12.16,10.289,10.289,0,0,0,12.16,22.45ZM24.32,12.16A12.16,12.16,0,1,1,12.16,0,12.16,12.16,0,0,1,24.32,12.16Z"
                                                transform="translate(0 0)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="container">
                        <div class="row">

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-2.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-3.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade"
                id="category-2"
                role="tabpanel"
                aria-labelledby="category-2-tab">

                <div class="container">
                    <div class="row">
                        <div class="col-3 my-4">
                            <h1 class="text-center text-md-end text-muted fw-bolder">اخر المقالات</h1>
                        </div>
                        <div class="col-9 my-4">
                            <div class="search-box">
                                <input type="text"
                                    id="gsearch"
                                    name="gsearch"
                                    placeholder="ابحث">
                                <div class="search-box-search-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-50 h-75"
                                        viewBox="0 0 29.934 29.932">
                                        <g transform="translate(0)">
                                            <path
                                                d="M23.384,23.384a1.871,1.871,0,0,1,2.647,0l7.2,7.2a1.871,1.871,0,0,1-2.645,2.647l-7.2-7.2a1.871,1.871,0,0,1,0-2.647Z"
                                                transform="translate(-3.849 -3.848)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                            <path
                                                d="M12.16,22.45A10.289,10.289,0,1,0,1.871,12.16,10.289,10.289,0,0,0,12.16,22.45ZM24.32,12.16A12.16,12.16,0,1,1,12.16,0,12.16,12.16,0,0,1,24.32,12.16Z"
                                                transform="translate(0 0)"
                                                fill="#bdbdbd"
                                                fill-rule="evenodd" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="container">
                        <div class="row">

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="#"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <img src="./assets/demo.jpg"
                                                class="card-img"
                                                alt="product">
                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4">
                                                العنوان</h2>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar-2.jpg"
                                                    alt="man">
                                                <p class="h4">احمد محمد حسين</p>
                                            </div>
                                            <div class="d-flex gap-5 align-items-center my-3 me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="19.256"
                                                    height="18.052"
                                                    viewBox="0 0 19.256 18.052">
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path
                                                                d="M2.407,2.25A2.407,2.407,0,0,0,0,4.657v1.2H19.256v-1.2A2.407,2.407,0,0,0,16.849,2.25ZM19.256,7.064H0V17.9A2.407,2.407,0,0,0,2.407,20.3H16.849A2.407,2.407,0,0,0,19.256,17.9Z"
                                                                transform="translate(0 -1.047)"
                                                                fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(1 -1.203)">
                                                        <g transform="translate(-1)"
                                                            clip-path="url(#a)">
                                                            <g transform="translate(0.602 1.203)">
                                                                <path
                                                                    d="M1.128,4.513V15.8a1.128,1.128,0,0,0,1.128,1.128H15.8A1.128,1.128,0,0,0,16.924,15.8V4.513ZM2.257,1.128A2.257,2.257,0,0,0,0,3.385V15.8a2.257,2.257,0,0,0,2.257,2.257H15.8A2.257,2.257,0,0,0,18.052,15.8V3.385A2.257,2.257,0,0,0,15.8,1.128Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                                <path
                                                                    d="M3.949,0a.564.564,0,0,1,.564.564v.564a.564.564,0,1,1-1.128,0V.564A.564.564,0,0,1,3.949,0ZM14.1,0a.564.564,0,0,1,.564.564v.564a.564.564,0,0,1-1.128,0V.564A.564.564,0,0,1,14.1,0Z"
                                                                    fill="#fff"
                                                                    fill-rule="evenodd" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="h5 fw-lighter">2021 / 1 / 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="left-side col-sm-12  col-md-4 d-none d-md-block">
        <div class=" col-sm-12 col-md-11 bg-white">
            <div class="container pb-4">
                <h1 class="d-inline-block mb-5 mt-4">فيديوهات</h1>
                <div class="card mb-3"
                    style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/bg-card.jpg"
                                class="img-fluid rounded-start h-100"
                                alt="card product">
                        </div>
                        <div class="col-md-8 card-body">

                            <h5 class="card-title">الاسم</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3"
                    style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/bg-card.jpg"
                                class="img-fluid rounded-start h-100"
                                alt="card product">
                        </div>
                        <div class="col-md-8 card-body">

                            <h5 class="card-title">الاسم</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3"
                    style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/bg-card.jpg"
                                class="img-fluid rounded-start h-100"
                                alt="card product">
                        </div>
                        <div class="col-md-8 card-body">

                            <h5 class="card-title">الاسم</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                    ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- Article Section - End -->

</main>
<!-- Main Section - End -->

@endsection

@section('scripts')
    @if(!empty(get_static_option('site_disqus_key')))
    <script>
        var disqus_config = function () {
        this.page.url = "{{route('frontend.blog.single',$blog_post->slug)}}";
        this.page.identifier = "{{$blog_post->id}}";
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = "https://{{get_static_option('site_disqus_key')}}.disqus.com/embed.js";
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    @endif
@endsection
