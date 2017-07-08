<?php $__env->startSection('morecss'); ?>
   <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ui/add.css')); ?>">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('morejs'); ?>
<!-- conf JS -->
    <script type="text/javascript" src="<?php echo e(asset('public/js/ui/conf.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="container-fluid" id='wrapper'>
            <div class="col-sm-offset-2 col-sm-8" id="forms">
                <form>
                    <div class="form-group">
                        <label for="txtContent">Confession</label>
                        <div class="alertContainer"></div>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <textarea name="txtContent" rows="7" style="resize: none" class="form-control"></textarea>
                        <script type="text/javascript">
                            config = {};
                            config.entities_latin = false;
                            config.language = 'vi';
                            CKEDITOR.replace( 'txtContent',config );
                            var urlConfAdd = "<?php echo e(route('conf.store')); ?>";
                            <?php if(Auth::check()): ?>
                                var user_id = "<?php echo e(Auth::id()); ?>";
                            <?php endif; ?>
                        </script>
                    </div>
                    <a class="btn btn-success conf-add">Đăng</a>
                </form>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>