@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
            <a href="<?=url('add-category')?>" class="btn btn-success"><i class="icon-plus"></i> Kategori Ekle</a>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kategoriler</h4>
                            <p class="card-description"> qr menünüzün kategorilini buradan <code>düzenleyebilirsiniz.</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Fotoğraf </th>
                                    <th> İsim </th>
                                    <th> Açıklama </th>
                                    <th> İşlemler </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $cat)

                                        <td> {{$cat->id}} </td>
                                        <td> <div style="text-align: center;"><img style="height:100px;width:100px" src="../Public/Images/{{$cat->image}}"> </td></center>
                                        <td> {{$cat->title}} </td>
                                        <td> {{$cat->description}} </td>
                                        <td> <a href="{{url('edit-category',['id'=>$cat->id])}}" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a> <a href="{{url('delete-category',['id'=>$cat->id])}}" class="btn btn-sm btn-danger"><i class="icon-trash"></i></a> </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection