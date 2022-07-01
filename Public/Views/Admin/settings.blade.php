@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">İşletme Ayarları</h4>
                            <p class="card-description"> İşletmenize ait bilgilerinizi buradan düzenleyebilirsiniz. </p>
                            <form class="forms-sample settings">
                                <input type="hidden" name="action" value="updateSettings" />
                                <div class="form-group">
                                    <label for="exampleInputName1">Cafe İsmi</label>
                                    <input type="text" name="name" class="form-control" id="firstname" placeholder="İsim" value="{{@$settings->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Instagram Adresi</label>
                                    <input type="text" name="instagram" class="form-control" id="firstname" placeholder="Instagram Kullanıcı Adı" value="{{@$settings->instagram}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Wifi İsmi</label>
                                    <input type="text" name="wifiname" class="form-control" placeholder="Wifi İsmi" value="{{@$settings->wifiname}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Wifi Şifresi</label>
                                    <input type="text" name="wifipassword" class="form-control"  placeholder="Wifi Şifresi" value="{{@$settings->wifipassword}}">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Gönder</button>
                                <button class="btn btn-light">İptal</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection