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

<?php $__env->startSection('content'); ?>
<section class="news mb-0 pb-5">
    <div class="container">
        <div class="route py-5 h4">
            <a class="text-decoration-none text-muted fw-lighter" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
            / <a class="text-decoration-none text-muted fw-lighter" href="<?php echo e(url('/').'/'.get_static_option('blog_page_slug')); ?>"> <?php echo e(get_static_option('home_page_14_' . $user_select_lang_slug . '_news_area_section_title')); ?></a>
        </div>

        <h1 class="news__title pb-2 mb-5 ">اخر الاخبار</h1>

        <div class="col-md-12">
            
                <?php $__currentLoopData = $all_last_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 col-sm-12">
                        <?php echo render_image_markup_by_attachment_id($item->image,'img-fluid rounded-start h-100 w-100'); ?>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title h1"><?php echo e($item->title); ?></h5>
                            <p class="card-text h5 lead mb-5"><?php echo e($item->excerpt); ?></p>
                            <div class="container my-4">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text"><small class="text-muted"><?php echo e(date_format($item->created_at,'d / m / Y')); ?></small></p>
                                    <a href=""
                                        class=" h3">المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>

</section>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\alahdf\@core\resources\views/frontend/pages/last_news/last_news.blade.php ENDPATH**/ ?>