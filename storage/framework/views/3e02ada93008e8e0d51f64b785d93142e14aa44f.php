<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <!-- Bootstrap 3 CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
   <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ai/table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ai/style.css')); ?>">
    <?php echo $__env->yieldContent('morecss'); ?>
</head>
<body>
        <!-- Code goes here -->   

            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer Nav -->
            <nav class="navbar navbar-default nav navbar-fixed-bottom" id='header-nav'>
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('public/upload/img/logo.png')); ?>" alt="LOGO" width="160px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo e(route('user.index')); ?>">Users<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo e(route('post.index')); ?>">Posts</a></li>
                            <?php if( URL::current() == Route('post.index')): ?>
                            <li><a href="#" data-toggle='modal' data-target="#myModal">Cates</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo e(route('conf.index')); ?>">Confessions</a></li>
                            <li id="add_post"><a href="<?php echo e(route('post.create')); ?>">Quẩy</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if(Auth::guest()): ?>
                                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                            <?php else: ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div> <!-- end collapse nav -->
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav> <!-- end nav -->
        
        <!-- jQuery first, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo e(asset('public/js/ai/table.js')); ?>"></script>
        <?php echo $__env->yieldContent('morejs'); ?>
</body>
</html>