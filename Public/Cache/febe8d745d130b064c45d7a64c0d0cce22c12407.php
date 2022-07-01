
<?php $__env->startSection('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Mağaza Ekle </h3>
        </div>
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori Ekle</h4>
                        <p class="card-description"> Eklemek istediğiniz kategorinin bilgilerini giriniz. </p>
                        <form id="add-category" class="forms-sample add-category" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="addCategory" />
                            <div class="form-group">
                                <label for="exampleInputName1">Kategori İsmi</label>
                                <input type="text" name="title" class="form-control" id="firstname" placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Kategori Açıklaması</label>
                                <input type="text" name="description" class="form-control" id="lastname" placeholder="Soyisim">
                            </div>
                            <div class="form-group">
                                <label>Kategori Fotoğrafı</label>
                                <input type="file" name="image"  class="form-control file-upload-info">

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
<?php echo $__env->make('Admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/add-category.blade.php ENDPATH**/ ?>