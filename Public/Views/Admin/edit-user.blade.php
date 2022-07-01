@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kullanıcı Düzenle</h4>
                            <p class="card-description"> {{$data['username']}} kullanıcısını düzenliyorsunuz. </p>
                            <form class="forms-sample update-user">
                                <div class="form-group">
                                    <label for="exampleInputName1">İsim</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="İsim" value="{{$data['firstname']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Soyisim</label>
                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Soyisim" value="{{$data['lastname']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Kullanıcı Adı</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Kullanıcı Adı" value="{{$data['username']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">E-Posta Adresi</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-Posta Adresi" value="{{$data['email']}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Telefon Numarası</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon Numarası" value="{{$data['phone']}}">
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