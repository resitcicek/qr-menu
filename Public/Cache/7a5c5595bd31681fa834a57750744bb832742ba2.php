
<?php $__env->startSection('content'); ?>
    <div class="bread">Kategoriler</div>
    <div class="container">
        <div class="col-12 categoryList">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('category',['id'=>$category->id])); ?>">
                    <div class="col-6 category">
                        <img src="<?php echo e(env('URL')); ?>/Public/Images/<?php echo e($category->image); ?>" class="categoryimage"/>
                        <span class="categoryname"><?php echo e($category->title); ?></span>
                    </div></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/menu.blade.php ENDPATH**/ ?>