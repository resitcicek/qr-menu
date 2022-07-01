<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=getenv('project')?> Yönetim Paneli</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/css/style.css">
    <link rel="stylesheet" href="<?=env('URL')?>/Public/Template/Admin/vendors/toastr/toastr.min.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=env('URL')?>/Public/Template/Admin/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="admin">
                <img src="<?=env('URL')?>/Public/Template/Admin/images/logo.svg" alt="logo" class="logo-dark" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?=env('URL')?>/Public/Template/Admin/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <h5 class="mb-0 font-weight-medium d-none d-lg-flex"><?=getenv('project')?> yönetim paneline hoşgeldiniz.</h5>
            <ul class="navbar-nav navbar-nav-right ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-speech"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?=env('URL')?>/Public/Template/Admin/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?=env('URL')?>/Public/Template/Admin/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?=env('URL')?>/Public/Template/Admin/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle ml-2" src="<?=env('URL')?>/Public/Template/Admin/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> <?php echo e($currentuser['username']); ?> </span></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="<?=env('URL')?>/Public/Template/Admin/images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3"><?php echo e($currentuser['firstname']); ?> <?php echo e($currentuser['lastname']); ?></p>
                            <p class="font-weight-light text-muted mb-0"><?php echo e($currentuser['email']); ?></p>
                        </div>
                        <a href="<?=url('profile')?>" class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> Hesap Ayarları</a>
                        <a href="<?=url('logout')?>" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Çıkış Yap</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <img class="img-xs rounded-circle" src="<?=env('URL')?>/Public/Template/Admin/images/faces/face8.jpg" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name"><?php echo e($currentuser['firstname']); ?> <?php echo e($currentuser['lastname']); ?></p>
                            <p class="designation"><?php echo e($currentuser['email']); ?> </p>
                        </div>

                    </a>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Yönetim Paneli</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('home')?>">
                        <span class="menu-title">Anasayfa</span>
                        <i class="icon-screen-desktop menu-icon"></i>
                    </a>
                </li>
                <?php if($currentuser['type'] == 0): ?>
                <li class="nav-item nav-category"><span class="nav-link">QR Menü İşlemleri</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('categories')?>">
                        <span class="menu-title">Kategoriler</span>
                        <i class="icon-options menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('foods')?>">
                        <span class="menu-title">Yemekler</span>
                        <i class="icon-basket menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('settings')?>">
                        <span class="menu-title">Genel Ayarlar</span>
                        <i class="icon-wrench menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('qr-code')?>">
                        <span class="menu-title">QR Kod Oluştur</span>
                        <i class="icon-frame menu-icon"></i>
                    </a>
                </li>
                <?php else: ?>
                    <li class="nav-item nav-category"><span class="nav-link">Admin İşlemleri</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=url('add-user')?>">
                            <span class="menu-title">Mağaza Ekle</span>
                            <i class="icon-options menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=url('users')?>">
                            <span class="menu-title">Mağazalar</span>
                            <i class="icon-basket menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=url('admin-settings')?>">
                            <span class="menu-title">Genel Ayarlar</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                    </li>

                <?php endif; ?>

            </ul>
        </nav>
<?php echo $__env->yieldContent('content'); ?>
 <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/js/vendor.bundle.base.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/toastr/toastr.min.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/js/api.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/chart.js/Chart.min.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/moment/moment.min.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/daterangepicker/daterangepicker.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/vendors/chartist/chartist.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?=env('URL')?>/Public/Template/Admin/js/off-canvas.js"></script>
<script src="<?=env('URL')?>/Public/Template/Admin/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?=env('URL')?>/Public/Template/Admin/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html><?php /**PATH C:\xampp\htdocs\Public\Views/Admin/layout.blade.php ENDPATH**/ ?>