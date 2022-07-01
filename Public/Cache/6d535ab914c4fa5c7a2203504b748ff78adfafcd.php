
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <a href="<?=url('add-food')?>" class="btn btn-success"><i class="icon-plus"></i> İçerik Ekle</a>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Yiyecek ve İçecekler</h4>
                            <p class="card-description"> qr menünüzün içeriğini buradan
                                <code>düzenleyebilirsiniz.</code>
                            </p>
                            <div id="accordion">

                                <div class="card">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#<?php echo e($foods['title']); ?>">
                                                <?php echo e($foods['title']); ?>

                                            </a>
                                        </div>
                                        <div id="<?php echo e($foods['title']); ?>" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th> #</th>
                                                        <th> Fotoğraf</th>
                                                        <th> İsim</th>
                                                        <th> Kategori</th>
                                                        <th> Fiyat</th>
                                                        <th> İşlemler</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if(count($foods['food']) > 0): ?>
                                                        <?php $__currentLoopData = $foods['food']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                            <td> <?php echo e($food['id']); ?> </td>
                                                            <td>
                                                                <div style="text-align: center;"><img
                                                                            style="height:100px;width:100px"
                                                                            src="../Public/Images/<?php echo e($food['image']); ?>">
                                                            </td></center>
                                                            <td> <?php echo e($food['title']); ?> </td>
                                                            <td> <?php echo e($food['title']); ?></td>
                                                            <td> <?php echo e($food['price']); ?> </td>
                                                            <td><a href="<?php echo e(url('edit-food',['id'=>$food['id']])); ?>"
                                                                   class="btn btn-sm btn-success"><i
                                                                            class="icon-pencil"></i></a> <a
                                                                        href="<?php echo e(url('delete-food',['id'=>$food['id']])); ?>"
                                                                        class="btn btn-sm btn-danger"><i
                                                                            class="icon-trash"></i></a></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/Foods.blade.php ENDPATH**/ ?>