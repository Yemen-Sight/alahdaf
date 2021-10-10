@extends('frontend.frontend-master')
@section('site-title')
    {{get_static_option('blog_page_'.$user_select_lang_slug.'_name')}}
@endsection
@section('page-title')
    {{get_static_option('blog_page_'.$user_select_lang_slug.'_name')}}
@endsection
@section('page-meta-data')
    <meta name="description" content="{{get_static_option('blog_page_'.$user_select_lang_slug.'_meta_description')}}">
    <meta name="tags" content="{{get_static_option('blog_page_'.$user_select_lang_slug.'_meta_tags')}}">
@endsection

@section('content')
<section class="news mb-0 pb-5">
    <div class="container">
        <div class="route py-5 h4">
            <a class="text-decoration-none text-muted fw-lighter" href="{{url('/')}}">{{__('Home')}}</a>
            / <a class="text-decoration-none text-muted fw-lighter" href="{{url('/').'/'.get_static_option('blog_page_slug')}}"> {{get_static_option('home_page_14_' . $user_select_lang_slug . '_news_area_section_title')}}</a>
        </div>

        <h1 class="news__title pb-2 mb-5 ">اخر الاخبار</h1>

        <div class="col-md-12">
            
                @foreach ($all_last_news as $item)
                <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 col-sm-12">
                        {!! render_image_markup_by_attachment_id($item->image,'img-fluid rounded-start h-100 w-100') !!}
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title h1">{{$item->title}}</h5>
                            <p class="card-text h5 lead mb-5">{{$item->excerpt}}</p>
                            <div class="container my-4">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text"><small class="text-muted">{{date_format($item->created_at,'d / m / Y')}}</small></p>
                                    <a href=""
                                        class=" h3">المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            
        </div>
    </div>

</section>

</main>

@endsection
