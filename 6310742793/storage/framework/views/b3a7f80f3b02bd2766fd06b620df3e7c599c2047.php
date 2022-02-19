<?php $__env->startSection('content'); ?>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Show Post</h2>
            <a href = "<?php echo e(route('posts.index')); ?>" class="btn btn-primary my-3">Back</a>
        </div>
    </div>


    <div class="row">
        <div class="card">
            <div class="card-title">
                <strong>Title:</strong>
                <?php echo e($post->title); ?>

            </div>
            <div class="card-text">
                <strong>Description:</strong>
                <?php echo e($post->description); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\CN334\6310742793\example-app\resources\views/posts/show.blade.php ENDPATH**/ ?>