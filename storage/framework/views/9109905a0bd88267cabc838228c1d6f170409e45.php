

<?php $__env->startSection('content'); ?>
        <div class="content">
            <div class="row">
            <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12">
                    <div class="card"><a>
                        <div class="card-header">
                            <strong class="card-title"><?php echo e($vid->namavideo); ?></strong>
                        </div>
                        <div class="card-body">
                        <video width="500" height="420" controls>
                        <source src="<?php echo e($vid->video); ?>" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <p class="card-text"><?php echo e($vid->deskripsivideo); ?></p>
                        </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/layouts/edhopelist.blade.php ENDPATH**/ ?>