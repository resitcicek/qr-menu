@extends('Admin/layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Profili düzenle</h4>
                        <p class="card-description"> Profil bilgilerinizi buradan düzenleyebilirsiniz. </p>
                        <form class="forms-sample update-user">
                            <div class="form-group">
                                <label for="exampleInputName1">İsim</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="İsim" value="{{$currentuser['firstname']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Soyisim</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Soyisim" value="{{$currentuser['lastname']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Kullanıcı Adı</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Kullanıcı Adı" value="{{$currentuser['username']}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">E-Posta Adresi</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-Posta Adresi" value="{{$currentuser['email']}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Telefon Numarası</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon Numarası" value="{{$currentuser['phone']}}">
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