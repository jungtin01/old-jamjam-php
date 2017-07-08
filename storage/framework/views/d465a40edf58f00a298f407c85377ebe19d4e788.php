<?php $__env->startSection('morecss'); ?>
<!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('morejs'); ?>
<!-- Cate Handle -->
<script type="text/javascript" src="<?php echo e(asset('public/js/ai/cate.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('public/js/ai/post.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('ai.blocks.postModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="info">ID</th>
                                    <th>Title</th>
                                    <th>Cate</th>
                                    <th>Author</th>
                                    <th>Date Uploaded</th>
                                    <th>View</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="line">
                                    <td class="username info">#<?php echo e($post->id); ?></td>
                                    <td><a role='button' class="postEdit" data-route="<?php echo e(route('post.edit',$post->id)); ?>" data-id='<?php echo e($post->id); ?>'><?php echo e($post->title); ?></a></td>
                                    <td id="cateshow"><?php echo e($post->cate->name); ?></td>
                                    <td><a href="javascript:void(0)"><?php echo e($post->user->username); ?></a></td>
                                    <td id="updated"><?php echo e($post->updated_at); ?></td>
                                    <td>
                                        <form>
                                            <a href="<?php echo e(route('post.view',$post->id)); ?>" target="_blank" class="btn btn-info btn-sm" type="button">View</a>
                                        </form>
                                    </td>
                                    <td>
                                        <?php if($post->level == 0): ?>
                                        <button type="button" class="btn btn-success check" value="1" data-id="<?php echo e($post->id); ?>">Check !</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-warning check" value="0" data-id="<?php echo e($post->id); ?>">Uncheck !</button>
                                    <?php endif; ?>
                                    </td>
                                    <td><button type="button" class="btn btn-danger postDel" data-id="<?php echo e($post->id); ?>">DELETE</button></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ai.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>