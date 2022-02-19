<?php $__env->startSection('content'); ?>

    <div class="row mt-5">
        <div class="clo-md-12">
            <h2>Add new post</h2>
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('posts.store')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                </div>

            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Enter description"></textarea>
                </div>
            </div>
            <div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
            </div>
        </div>
    </form>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\CN334\6310742793\example-app\resources\views/posts/create.blade.php ENDPATH**/ ?>