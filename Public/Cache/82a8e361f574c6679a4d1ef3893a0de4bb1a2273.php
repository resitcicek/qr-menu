
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mağazalar</h4>
                            <p class="card-description"> Ekli mağazaları buradan <code>düzenleyebilirsiniz.</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Kullanıcı Adı </th>
                                    <th> Ad Soyad </th>
                                    <th> Telefon </th>
                                    <th> Mail </th>
                                    <th> İşlemler </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($user->id); ?> </td>
                                        <td> <?php echo e($user->username); ?> </td>
                                        <td><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                                        <td> <?php echo e($user->phone); ?> </td>
                                        <td> <?php echo e($user->email); ?> </td>
                                        <td> <a href="<?php echo e(url('edit-user',['username'=>$user->username])); ?>" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a> <a href="<?php echo e(url('delete-user',['username'=>$user->username])); ?>" class="btn btn-sm btn-danger"><i class="icon-trash"></i></a> </td>
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
<?php echo $__env->make('Admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/Users.blade.php ENDPATH**/ ?>