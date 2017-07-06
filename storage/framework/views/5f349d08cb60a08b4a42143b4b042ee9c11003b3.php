<?php $__env->startSection('morecss'); ?>
   <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/ui/add.css')); ?>">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Mật khẩu cấp 2 :</label>
                                    <input type="text" class="form-control" id="authpass">
                                </div>
                                <input type="submit" class="btn btn-success" value="Đăng">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->  
        <section class="container-fluid" id='wrapper'>
            <div class="col-sm-offset-2 col-sm-8" id="forms">
                <form action="<?php echo e(route('post.store')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="alertContainer">
                        <?php if(session('status')): ?>
                        <div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>Bạn đã Post thành công ... Post sẽ chờ ADMIN xét duyệt</div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="txtTitle">Title</label>
                        <input type="text" name="txtTitle" class="form-control">
                    </div>
                    <div class="form-group form-inline">
                        <label for="cate">Category</label>
                        <select class="form-control" name="cate_id">
                            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cate->id); ?>" name="cate_id"><?php echo e($cate->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group form-inline">
                        <label for="tbn">Thumbnail</label>
                        <input type="file" name="tbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtDesc">Description</label>
                        <textarea name="txtDesc" rows="3" style="resize: none" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtContent">Content</label>
                        <textarea name="txtContent" rows="7" style="resize: none" class="form-control"></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtContent')</script>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                    <input type="submit" class="btn btn-success" value="Đăng">
                </form>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>