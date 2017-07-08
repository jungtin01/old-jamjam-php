<?php $__env->startSection('morecss'); ?>
	<!-- Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.theme.default.min.css')); ?>">
   <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ui/post.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('morejs'); ?>
	<!-- Carousel JS -->
        <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo e(asset('public/js/ui/post.js')); ?>"></script>   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="main-container" style="background:url(<?php echo e(asset('public/upload/imgsUpload')); ?>/<?php echo e($post->tbn); ?> }) center center no-repeat;background-size: cover;">
            <div class="row">
                <div class="container-fluid" id="opa-container">
                    <div class="row">
                        <div class="col-md-8" id="left-content">
                            <h1 class="title"><?php echo e($post->title); ?></h1>
                            <p class="author"><a href="#"><?php echo e($post->user->username); ?></a><span> | </span><?php echo e($post->updated_at); ?><span class='hidden-md hidden-lg'> | Save to Facebook</span></p>
                            <p class="lead desc"><?php echo e($post->description); ?></p>
                            <hr>
                            <?php echo $post->content; ?>

                            
                            <hr>
                        
                        <div class="row">
                            <div class="owl-carousel owl-theme">
                                <div class="item"><img src="<?php echo e(asset('public/upload/img/girl1.jpg')); ?>" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="<?php echo e(asset('public/upload/img/girl2.jpg')); ?>" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="<?php echo e(asset('public/upload/img/girl3.jpg')); ?>" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="<?php echo e(asset('public/upload/img/girl3.jpg')); ?>" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                                <div class="item"><img src="<?php echo e(asset('public/upload/img/girl1.jpg')); ?>" alt=""><h4>Cô gái đầu tiên có thai trong nhân loại gái đầu tiên có thai trong nhân loại</h4></div>
                            </div>
                        </div>  
                        <hr class="hidden-md hidden-lg">    
                        <footer class="hidden-xs hidden-sm">
                            <div class="row">
                                <div class="container-fluid" id="footer">
                                    <p>This Website is created by Nguyen Trung Thinh</p>
                                </div>
                            </div>            
                        </footer>       
                        </div> <!-- end left-content -->
                        <div class="col-md-4" id="right-content">
                            <header class='container' id="right-header">
                                    <p>lượt xem<span> | </span>like btn<span class="hidden-sm hidden-xs"> | Save to Facebook</span></p>
                            </header>
                            <hr class="hidden-sm hidden-xs">
                            <section id="right-comment">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                    <button class="btn btn-success btn-sm" type="submit">Comment</button>
                                </div>
                            </section>
                        </div>
                    </div>  <!-- end row -->
                </div> <!-- end opa-container -->
            </div> <!-- end row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>