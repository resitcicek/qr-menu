
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kategori Düzenle</h4>
                            <p class="card-description"> <?php echo e($data['title']); ?> isimli kategoriyi düzenliyorsunuz. </p>

                            <div style="text-align: center;"><img style="width:100px;height:100px;border-radius:20%" src="../../Public/Images/<?php echo e($data['image']); ?>"></div>

                            <form id="update-category" class="forms-sample update-category" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateCategory" />
                                <input type="hidden" name="id" value="<?php echo e($data['id']); ?>" />
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori İsmi</label>
                                    <input type="text" name="title" class="form-control" id="firstname" placeholder="İsim" value="<?php echo e($data['title']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori Açıklaması</label>
                                    <input type="text" name="description" class="form-control" id="lastname" placeholder="Soyisim" value="<?php echo e($data['description']); ?>">
                                </div>
                                <div class="form-group">

                                    <label>!! Sadece Fotoğrafı Değiştirmek İstiyorsanız !!</label>
                                    <input type="file" name="image"  class="form-control file-upload-info" value="../../Public/Images/<?php echo e($data['image']); ?>">

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
                                <button class="btn btn-light">İptal</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/edit-category.blade.php ENDPATH**/ ?>