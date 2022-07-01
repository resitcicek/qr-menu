
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
            <a href="<?=url('add-category')?>" class="btn btn-success"><i class="icon-plus"></i> Kategori Ekle</a>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kategoriler</h4>
                            <p class="card-description"> qr menünüzün kategorilini buradan <code>düzenleyebilirsiniz.</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Fotoğraf </th>
                                    <th> İsim </th>
                                    <th> Açıklama </th>
                                    <th> İşlemler </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <td> <?php echo e($cat->id); ?> </td>
                                        <td> <div style="text-align: center;"><img style="height:100px;width:100px" src="../Public/Images/<?php echo e($cat->image); ?>"> </td></center>
                                        <td> <?php echo e($cat->title); ?> </td>
                                        <td> <?php echo e($cat->description); ?> </td>
                                        <td> <a href="<?php echo e(url('edit-category',['id'=>$cat->id])); ?>" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a> <a href="<?php echo e(url('delete-category',['id'=>$cat->id])); ?>" class="btn btn-sm btn-danger"><i class="icon-trash"></i></a> </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/Categories.blade.php ENDPATH**/ ?>