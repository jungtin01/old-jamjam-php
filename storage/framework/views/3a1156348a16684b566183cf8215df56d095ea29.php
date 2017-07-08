<?php $__env->startSection('morecss'); ?>
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
<div class="container-fluid" id="main-container" style="background:url(<?php echo e(asset('public/upload/img/slide1.jpg')); ?>) center center no-repeat;background-size: cover;">
            <div class="row">
                <div class="container-fluid" id="opa-container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8" id="left-content">
                            <h1 class="title">Bài post số đầu tiên</h1>
                            <p class="author"><a href="#">Nguyễn Trung Thinh</a><span> | </span>22/03/2000<span class='hidden-md hidden-lg'> | Save to Facebook</span></p>
                            <p class="lead desc">đây là Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptates ratione, illum debitis, minima est itaque veritatis porro dolor excepturi.</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sed aliquam consectetur vel ad. Rerum, nisi. Velit error quasi ab officiis natus at ratione voluptates, id optio sed, sapiente voluptas.</p>
                            <img src="<?php echo e(asset('public/upload/img/slide1.jpg')); ?>" alt="girl2" class="img-responsive">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem illum non assumenda quis tempora, porro debitis beatae doloribus recusandae possimus reiciendis fugit maxime nulla quibusdam incidunt iste impedit, sit laboriosam.</p>
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