<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Menü</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <link href="<?=env('URL')?>/Public/Template/asssets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=env('URL')?>/Public/Template/asssets/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?=env('URL')?>/Public/Template/asssets/lib/bootstrap/js/bootstrap.min.js"
            type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
<div class="modal fade" id="wifiModal" tabindex="-1" role="dialog" aria-labelledby="wifiModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wifi Bilgileri</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="mt-3"></div>

                <table class="table table-dark table-hover">
                    <thead>
                    <tr>

                        <th scope="col"><i class="fa fa-wifi"></i> Wifi İsmi</th>
                        <th scope="col"><i class="fa fa-unlock"></i> Wifi Şifresi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo e($settings->wifiname); ?></td>
                        <td><?php echo e($settings->wifipassword); ?></td>
                    </tr>

                    </tbody>
                </table>

                <table class="table table-dark table-hover">
                    <thead>
                    <tr>

                        <th scope="col"><i class="fa fa-address-card"></i> Cafe İsmi</th>
                        <th scope="col"><i class="fa fa-phone-square"></i> Telefon Numarası</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo e($settings->name); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-lef"><a data-bs-toggle="modal" data-bs-target="#wifiModal" href="javascript:;">İletişim &
            Wifi</a></div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\Public\Views/layout.blade.php ENDPATH**/ ?>