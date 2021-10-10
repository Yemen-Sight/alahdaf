<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('blog_page_'.$user_select_lang_slug.'_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('blog_page_'.$user_select_lang_slug.'_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e(get_static_option('blog_page_'.$user_select_lang_slug.'_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('blog_page_'.$user_select_lang_slug.'_meta_tags')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('write_blog'); ?>
<div class="col-12 bg-primary bg-opacity-50 position-absolute bottom-0 d-flex justify-content-center gap-5 p-3 text-light">
    <h1 class="fw-bolder">اكتب مقالتك الان</h1>
    <a href=""
        class="fully-rounded-bg--rose h3 text-light text-decoration-none px-5 py-2 me-5">
        اكتب
    </a>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 


</section>
<!-- Hero Content Section - End -->

<!-- Article Section - Start -->
<section class="article bg-light pb-5">
<div class="container">
<div class="route my-5 h4">
    
      
<a class="text-decoration-none text-muted fw-lighter" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
/ <a class="text-decoration-none text-muted fw-lighter" href="<?php echo e(url('/').'/'.get_static_option('blog_page_slug')); ?>"> <?php echo e(get_static_option('blog_page_' . $user_select_lang_slug . '_name')); ?></a>
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
            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item" role="presentation">
        <button class="nav-link h2"
            id="category-<?php echo e($data->blog_categories_id); ?>-tab"
            data-bs-toggle="tab"
            data-bs-target="#category-<?php echo e($data->id); ?>"
            type="button"
            role="tab"
            aria-controls="category-<?php echo e($data->id); ?>"
            aria-selected="false"><?php echo e($data->name); ?></button>
        </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $all_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                            
                          
                            <div class=" col-md-6 col-lg-4 mb-5">
                                <a href="<?php echo e(route('frontend.blog.single',$data->slug)); ?>"
                                    class="text-decoration-none ">
                                    <div class="card border overflow-hidden shadow">
                                        <div class="">
                                            <?php echo render_image_markup_by_attachment_id($data->image,'card-img'); ?>

                                        </div>
                                        <div
                                            class="card-body text-light bg-dark bg-opacity-75 border-4">
                                            <h2 class="card-title mb-4"><?php echo e($data->title); ?></h2>
                                            <p><?php echo e($data->excerpt); ?></p>
                                            <div class="d-flex gap-4 align-items-center">
                                                <img class="avatar"
                                                    src="./assets/avatar/avatar.jpeg"
                                                    alt="man">
                                                <p class="h4"><?php echo e($data->author); ?></p>
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
                                                <p class="h5 fw-lighter"> <?php echo e(date_format($data->created_at,'d / m / Y')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
               
                <?php $__currentLoopData = $all_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                
                <div class="card mb-3"
                    style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                          <a href="https://youtube.com/watch?v=<?php echo e($item->embed_code); ?>">
                            <img class="img-fluid rounded-start h-100" src="https://i.ytimg.com/vi/<?php echo e($item->embed_code); ?>/hqdefault.jpg"> 
                          </a>  
                        </div>    
                        <div class="col-md-8 card-body">

                            <h5 class="card-title"> <?php echo e($item->title); ?></h5>
                            <p class="card-text"><small class="text-muted">Last updated <?php
                             echo   time_diff_string($item->updated_at, 'now');
                            ?> </small></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- Article Section - End -->

</main>
<!-- Main Section - End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\alahdf\@core\resources\views/frontend/pages/blog/blog.blade.php ENDPATH**/ ?>