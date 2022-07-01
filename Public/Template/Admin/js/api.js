$(document).ready(function (){
    const successToastr = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "4000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    const failedToastr = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "4000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $('body').on('submit', '.sign-in', function() {
        $form = $(this);
        $.ajax({
            url: '../api/admin',
            type: 'POST',
            data: $form.serialize()+'&action=signin',
            dataType: 'json',
            success: function(json) {
               if(json.status == true){
                   toastr.options = successToastr
                   Command: toastr["success"]("Giriş yapıldı, yönlendiriliyorsunuz.")
                   location.reload();
               }
               else{
                   toastr.options = failedToastr
                   Command: toastr["error"]("Kullanıcı adı veya şifre hatalı.")
               }


            }
        });
        return false;
});
    /**
     * Add User Ajax
     */
    $('body').on('submit', '.add-user', function() {
        $form = $(this);
        $.ajax({
            url: '../api/admin',
            type: 'POST',
            data: $form.serialize()+'&action=addUser',
            dataType: 'json',
            success: function(json) {
                if(json.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("Mağaza eklendi.")
                    location.reload();
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("Kullanıcı oluşturulamadı. E-Posta veya kullanıcı adı kayıtlı olabilir.")
                }


            }
        });
        return false;
    });
    /**
     * Update User Ajax
     */
    $('body').on('submit', '.update-user', function() {
        $form = $(this);
        $.ajax({
            url: '/../../api/admin',
            type: 'POST',
            data: $form.serialize()+'&action=updateUser',
            dataType: 'json',
            success: function(json) {
                if(json.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("Bilgiler güncellendi. Sayfa yenileniyor.")
                    setTimeout(function(){
                        window.location.reload();
                    }, 4000);
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("Bilgiler güncellenemedi. Sayfayı yenileyin.")
                }


            }
        });
        return false;
    });
    /**
     * Add Category Ajax
     */
    $('body').on('submit', '.add-category', function(e) {
        $.ajax({
            url: '/../../api/admin',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (res) {
                res = JSON.parse(res);
                if(res.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("Kategori eklendi.")
                    document.getElementById('add-category').reset();
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("Kategori eklenemedi. Tekrar deneyin.")
                }
            }
        });
        return false;
    });

    $('body').on('submit', '.add-food', function(e) {
        $.ajax({
            url: '/../../api/admin',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (res) {
                res = JSON.parse(res);
                if(res.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("İçerik eklendi.")
                    document.getElementById('add-food').reset();
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("İçerik eklenemedi. Tekrar deneyin.")
                }
            }
        });
        return false;
    });
    $('body').on('submit', '.settings', function(e) {
        $.ajax({
            url: '/../../api/admin',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (res) {
                res = JSON.parse(res);
                if(res.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("İçerik eklendi.")
                    document.getElementById('add-food').reset();
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("İçerik eklenemedi. Tekrar deneyin.")
                }
            }
        });
        return false;
    });

    /**
     * Update Category Ajax
     */

    $('body').on('submit', '.update-category', function(e) {
        $.ajax({
            url: '/../../api/admin',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (res) {
                res = JSON.parse(res);
                if(res.status == true){
                    toastr.options = successToastr
                    Command: toastr["success"]("Kategori eklendi.")
                    location.reload();
                }
                else{
                    toastr.options = failedToastr
                    Command: toastr["error"]("Kategori eklenemedi. Tekrar deneyin.")
                }
            }
        });
        return false;
    });
});
