@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Yiyecek & İçecek Ekle</h4>
                            <p class="card-description"> Eklemek istediğiniz Yiyecek & İçeceknin bilgilerini giriniz. </p>
                            <form id="add-category" class="forms-sample add-food" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="addFood" />
                                <div class="form-group">
                                    <label for="exampleInputName1">Yiyecek & İçecek İsmi</label>
                                    <input type="text" name="title" class="form-control" id="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Yiyecek & İçecek Açıklaması (İçindekiler)</label>
                                    <input type="text" name="description" class="form-control" id="lastname"">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Fiyat</label>
                                    <input type="text" name="price" class="form-control" id="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Kategori</label>
                                    <select type="text" name="categoryid" class="form-control">
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Yiyecek & İçecek Fotoğrafı</label>
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
@endsection