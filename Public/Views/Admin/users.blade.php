@extends('Admin/layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mağazalar</h4>
                            <p class="card-description"> Ekli mağazaları buradan <code>düzenleyebilirsiniz.</code>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Kullanıcı Adı </th>
                                    <th> Ad Soyad </th>
                                    <th> Telefon </th>
                                    <th> Mail </th>
                                    <th> İşlemler </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $user)
                                    <tr>
                                        <td> {{$user->id}} </td>
                                        <td> {{$user->username}} </td>
                                        <td>{{$user->firstname}} {{$user->lastname}}</td>
                                        <td> {{$user->phone}} </td>
                                        <td> {{$user->email}} </td>
                                        <td> <a href="{{url('edit-user',['username'=>$user->username])}}" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a> <a href="{{url('delete-user',['username'=>$user->username])}}" class="btn btn-sm btn-danger"><i class="icon-trash"></i></a> </td>
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