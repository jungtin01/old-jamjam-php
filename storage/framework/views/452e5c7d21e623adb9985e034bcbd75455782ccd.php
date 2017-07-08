<?php $__env->startSection('morecss'); ?>
	<!-- Scrollbar CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/jquery.mCustomScrollbar.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ui/index.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('morejs'); ?>
<!-- Index JS -->
    <script type="text/javascript" src="<?php echo e(asset('public/js/ui/index.js')); ?>"></script>
	<!-- Scrollbar JS -->
        <script src="<?php echo e(asset('public/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script>
            (function($){
                $(window).on("load",function(){
                    $("#right-content").mCustomScrollbar({
                        theme:"rounded-dark",setHeight:"100%"
                    });
                });
            })(jQuery);
        </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-8  pull-left" id='left-content'>
                    <div class="row">   <!-- row carousel -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php $__currentLoopData = $carous; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <a href="<?php echo e(route('post',$carou->id)); ?>"><img src="<?php echo e(asset('public/upload/imgsUpload')); ?>/<?php echo e($carou->tbn); ?>" /></a>
                                    <div class="carousel-caption">
                                        <h3><?php echo e($carou->title); ?></h3>
                                        <p><?php echo e($carou->description); ?></p>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div><!-- end carousel -->
                    </div> <!-- end row carousel -->
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row" id="row-content">
                            <div class="jumbotron row-jumbotron" style="background-image:url(<?php echo e(asset('public/upload/imgsUpload/')); ?>/<?php echo e($post->tbn); ?>);margin-top:5rem">
                                    <div class="container container-jumbotron">
                                        <div class="glyphicon-jumbotron">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                            <span class="view-number">0101</span>
                                            <span>|</span>
                                            <span class='glyphicon glyphicon-stats'></span>
                                            <span class='view-number'>Rank 1</span>
                                        </div>
                                        <h2 class="title"><?php echo e($post->title); ?></h2>
                                        <p class="desc"><?php echo e($post->desc); ?></p>
                                        <p>
                                            <a class="btn btn-success btn-lg" href="<?php echo e(route('post',$post->id)); ?>" role="button">Đọc</a>
                                            <small class='date'><?php echo e($post->updated_at); ?></small> |
                                            <small><a href="javascript:void(0)"  class='author'><?php echo e($post->user->username); ?></a></small> |
                                            <span class="jumbotron-icon">
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                <span>0101</span>
                                                <span>|</span>
                                                <span class='glyphicon glyphicon-stats'></span>
                                                <span >Rank 1</span>
                                            </span>
                                        </p>
                                    </div>
                            </div>
                        </div> <!-- row-content -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="row" id="pagination">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- pagination -->
                    </div>
                </div> <!-- end left-content -->
                <div class="col-md-4" id='right-content'>
                    <h1 id="conf-title">Confession</h1>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    <p class="conf-content"><span class="conf-span"><a href="#">#010101</a></span>Cũng lâu rồi chúng ta không gặp nhau em nhỉ haha nhớ lại những ngày mà chúng ta còn ở thời học sinh ấy,thiệt là vui nhỉ .Cùng nhau nhảy múa vui đùa cùng với đám bạn lờn</p>
                    <hr>
                    
                    <div class="row" id="pagination">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- pagination -->
                    </div><!--  end div pagination -->
                    
                </div><!-- end right-content -->
            </div>     
        </div> <!-- end content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>