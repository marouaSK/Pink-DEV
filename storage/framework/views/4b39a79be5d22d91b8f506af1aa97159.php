<!-- resources/views/requests/index.blade.php -->


<?php $__env->startSection('title', 'Requests'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <h1 style="text-align: center; background-color: #ff9800; color: white; padding: 15px;">Requests</h1>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th>Request</th>
                            <th>Att 1</th>
                            <th>Att 2</th>
                            <th>Att 3</th>
                            <th>Att 5</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(route('requests.show', $id)); ?>" class="text-decoration-none"><?php echo e($request['request']); ?></a></td>
                            <td><?php echo e($request['att1']); ?></td>
                            <td><?php echo e($request['att2']); ?></td>
                            <td><?php echo e($request['att3']); ?></td>
                            <td><?php echo e($request['att5']); ?></td>
                            <td>
                                <button class="btn btn-success btn-sm me-2" title="Accept">
                                    <i class="fas fa-check-circle"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pink-dev\resources\views/requests/index.blade.php ENDPATH**/ ?>