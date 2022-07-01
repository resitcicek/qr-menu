
<?php $__env->startSection('content'); ?>
    <div class="head">
        <button class="btn btn-back" onclick="history.back()">< Geri</button>
        <a href="<?php echo e(url('menu',['username'=>$user->username])); ?>" class="category-title"><?php echo e($settings->name); ?></a>
    </div>
    <div class="container">
        <div class="col-12 categoryList">
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-12 category">
                    <img src="<?php echo e(env('URL')); ?>/Public/Images/<?php echo e($food->image); ?>" class="categoryimage"/>
                    <span class="categoryname"><?php echo e($food->title); ?></span>
                    <span class="price"><?php echo e($food->price); ?> ₺</span>
                    <span class="details"><?php echo e($food->description); ?></span>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/category.blade.php ENDPATH**/ ?>