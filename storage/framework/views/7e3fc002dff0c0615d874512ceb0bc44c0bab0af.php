<?php $__env->startSection('morejs'); ?>
<!-- User JS  -->
    <script src="<?php echo e(asset('public/js/ai/user.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('ai.blocks.userModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="success">Username</th>
                                    <th>FB.account</th>
                                    <th class="warning"  style="width: 15rem;">Level</th>
                                    <th>Posts</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="line">
                                    <td class="username success"><a role='button' data-id="<?php echo e($user->id); ?>"><?php echo e($user->username); ?></a></td>
                                    <td><a href='javascript:void(0)'>None</a></td>
                                    <td class="form-group"><input type="text" name="level" value="<?php if($user->level == 0): ?> User <?php else: ?> Admin <?php endif; ?>" class="form-control" disabled="disabled" data-level="<?php echo e($user->level); ?>"></td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">3 Posts</a></td>
                                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ai.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>