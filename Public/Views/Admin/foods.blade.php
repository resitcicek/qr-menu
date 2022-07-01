@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <a href="<?=url('add-food')?>" class="btn btn-success"><i class="icon-plus"></i> İçerik Ekle</a>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Yiyecek ve İçecekler</h4>
                            <p class="card-description"> qr menünüzün içeriğini buradan
                                <code>düzenleyebilirsiniz.</code>
                            </p>
                            <div id="accordion">

                                <div class="card">
                                    @foreach ($data as $foods)
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#{{$foods['title']}}">
                                                {{$foods['title']}}
                                            </a>
                                        </div>
                                        <div id="{{$foods['title']}}" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th> #</th>
                                                        <th> Fotoğraf</th>
                                                        <th> İsim</th>
                                                        <th> Kategori</th>
                                                        <th> Fiyat</th>
                                                        <th> İşlemler</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(count($foods['food']) > 0)
                                                        @foreach ($foods['food'] as $food)

                                                            <td> {{$food['id']}} </td>
                                                            <td>
                                                                <div style="text-align: center;"><img
                                                                            style="height:100px;width:100px"
                                                                            src="../Public/Images/{{$food['image']}}">
                                                            </td></center>
                                                            <td> {{$food['title']}} </td>
                                                            <td> {{$food['title']}}</td>
                                                            <td> {{$food['price']}} </td>
                                                            <td><a href="{{url('edit-food',['id'=>$food['id']])}}"
                                                                   class="btn btn-sm btn-success"><i
                                                                            class="icon-pencil"></i></a> <a
                                                                        href="{{url('delete-food',['id'=>$food['id']])}}"
                                                                        class="btn btn-sm btn-danger"><i
                                                                            class="icon-trash"></i></a></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection