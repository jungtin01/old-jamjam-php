<?php $__env->startSection('morecss'); ?>
   <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ai/view-ad.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('morejs'); ?>
    <!-- Carousel JS -->
        <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo e(asset('public/js/ui/post.js')); ?>"></script>   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="main-container" style="background:url(<?php echo e(asset('public/upload/imgsUpload/')); ?>/<?php echo e(session('tbn')); ?>) center center no-repeat;background-size: cover;">
            <div class="row">
                <div class="container-fluid" id="opa-container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8" id="left-content">
                            <h1 class="title"><?php echo e(session('title')); ?></h1>
                            <p class="author"><a href="#"><?php echo e(session('username')); ?></a><span> | </span><?php echo e(session('updated_at')); ?><span class='hidden-md hidden-lg'> | Save to Facebook</span></p>
                            <p class="lead desc"><?php echo e(session('description')); ?></p>
                            <hr>
                            <?php echo session('content'); ?>

                        <hr class="hidden-md hidden-lg">    
                        <footer class="hidden-xs hidden-sm">
                            <div class="row">
                                <div class="container-fluid" id="footer">
                                    <p>This Website is created by Nguyen Trung Thinh</p>
                                </div>
                            </div>            
                        </footer>       
                        </div> <!-- end left-content -->
                    </div>  <!-- end row -->
                </div> <!-- end opa-container -->
            </div> <!-- end row -->
        </div> <!-- end main-container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>