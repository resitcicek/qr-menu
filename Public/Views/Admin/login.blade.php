<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel </title>

    <link rel="stylesheet" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/css/style.css" />
    <link rel="stylesheet" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/toastr/toastr.min.css">
    <link rel="shortcut icon" href="<?=getenv('BASE_PATH')?>/Public/Template/Admin/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/images/logo.svg">
                        </div>
                        <h4>Merhaba!</h4>
                        <h6 class="font-weight-light">Devam etmek için giriş yapın.</h6>
                        <form class="pt-3 sign-in" >
                            <div class="form-group">
                                <input type="username" name="username" class="form-control form-control-lg" id="username" placeholder="Kullanıcı Adı">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Parola">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Giriş Yap</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input"> Beni hatırla </label>
                                </div>
                                <a href="#" class="auth-link text-black">Parolanızı mı unuttunuz?</a>
                            </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/js/vendor.bundle.base.js"></script>
<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/js/jquery.js"></script>
<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/js/api.js"></script>
<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/vendors/toastr/toastr.min.js"></script>
<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/js/off-canvas.js"></script>
<script src="<?=getenv('BASE_PATH')?>/Public/Template/Admin/js/misc.js"></script>

</body>
</html>