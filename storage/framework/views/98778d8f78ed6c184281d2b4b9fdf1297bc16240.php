<?php $__env->startSection('morejs'); ?>
<!-- Conf js -->
    <script type="text/javascript" src="<?php echo e(asset('public/js/ai/conf.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="admin_id" value="<?php echo e(Auth::id()); ?>">
                            <thead>
                                <tr>
                                    <th class="info">ID</th>
                                    <th>Content</th>
                                    <th>Date Updated</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                <?php $__currentLoopData = $confs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="line">
                                    <td class="username info">#<?php echo e($conf->id); ?></td>
                                    <td><?php echo $conf->content; ?></td>
                                    <td><?php echo e($conf->updated_at); ?></td>
                                    <?php if($conf->level == 0): ?>
                                        <td><button type="button" class="btn btn-success confCheck" value="1" data-route="<?php echo e(route('conf.update',$conf->id)); ?>" data-id="<?php echo e($conf->id); ?>">Check !</button></td>
                                    <?php else: ?>
                                        <td><button type="button" class="btn btn-warning confCheck" value="0" data-route="<?php echo e(route('conf.update',$conf->id)); ?>" data-id="<?php echo e($conf->id); ?>">Uncheck !</button></td>
                                    <?php endif; ?>
                                    <td><button type="button" class="btn btn-danger confDel" data-id="<?php echo e($conf->id); ?>">DELETE</button></td>
                                    <script type="text/javascript">
                                        user_id = "<?php echo e(Auth::id()); ?>";
                                    </script>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ai.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>