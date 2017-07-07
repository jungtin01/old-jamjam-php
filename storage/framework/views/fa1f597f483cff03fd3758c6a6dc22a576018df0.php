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
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ui/style.css')); ?>">
    <?php echo $__env->yieldContent('morecss'); ?>
</head>
<body style="background:url(<?php echo e(asset('public/upload/img/bg.png')); ?>) no-repeat;background-size:cover;">
        <!-- Code goes here -->
        <header>
            <nav class="navbar navbar-default nav navbar-fixed-top" style="background:rgba(255,255,255,.9)">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo e(url('/index')); ?>"><img src="<?php echo e(asset('public/upload/img/logo.png')); ?>" alt="LOGO" width="160px"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#" id="btn-home">Home <span class="sr-only">(current)</span></a></li>
                            <?php if( URL::current() == Route('index') ): ?>
                                <li id='btn-conf'><a href="#">Confession</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo e(route('admin')); ?>">Admin</a></li>
                            <li id="add_post"><a href="#"  class="add">Quẩy</a></li>
                            <script type="text/javascript">
                                var urlAdd = "<?php echo e(route('post.create')); ?>";
                                var urlConf = "<?php echo e(route('conf.create')); ?>";
                            </script>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cơm gà ...." aria-describedby="basic-addon1">
                                <span class="input-group-addon" id="basic-addon1">
                                    <a href="javascript:void(0)" class="btn-sm" role='button'>Enter</a>
                                </span>
                            </div>
                        </form>
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
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        <!-- jQuery first, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo e(asset('public/js/ui/script.js')); ?>"></script>
        <?php echo $__env->yieldContent('morejs'); ?>
</body>
</html>