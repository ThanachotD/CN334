;


<?php $__env->startSection('content'); ?>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Laravel 8 CRUD - Index</h2>
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success my-3">Create new post</a>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">

        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($value->title); ?></td>
                <td><?php echo e(Str::limit($value->description,100)); ?></td>
                <td>
                    <form action="<?php echo e(route('posts.destroy',$value->id)); ?>" method="post">
                        <a href="<?php echo e(route('posts.show',$value->id)); ?>" class="btn btn-primary">Show</a>
                        <a href="<?php echo e(route('posts.edit',$value->id)); ?>" class="btn btn-secondary">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $data->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\CN334\6310742793\example-app\resources\views/posts/index.blade.php ENDPATH**/ ?>