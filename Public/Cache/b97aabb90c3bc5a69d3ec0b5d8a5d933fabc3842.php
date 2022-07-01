
<?php $__env->startSection('content'); ?>
    <div class="head">
        <button class="btn btn-back" onclick="history.back()">< Geri</button>
        <div class="category-title"><?php echo e($category->title); ?></div>
    </div>
    <div class="container">


        <div class="col-12 categoryList">
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 category">
                    <div class="filter"></div>
                    <img src="<?php echo e(env('URL')); ?>/Public/Images/<?php echo e($food->image); ?>" class="categoryimage"/>
                    <span class="categoryname"><?php echo e($food->title); ?></span>
                    <span class="price"><?php echo e($food->price); ?>₺</span>
                    <span class="details"> <?php echo e($food->description); ?> </span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Karışık Tost</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="asssets/images/kahvalti.jpg" class="categoryimage featured-img"/>
                        <div class="mt-3"></div>
                        <b> İçindekiler: </b>Sucuk, kaşar peyniri, domates, bazlama ekmeği.
                        <br/>
                        <b> Fiyat: </b>30₺
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/category.blade.php ENDPATH**/ ?>