@extends('layout')
@section('content')
    <div class="head">
        <button class="btn btn-back" onclick="history.back()">< Geri</button>
        <a href="{{url('menu',['username'=>$user->username])}}" class="category-title">{{$settings->name}}</a>
    </div>
    <div class="container">
        <div class="col-12 categoryList">
            @foreach($foods as $food)

                <div class="col-12 category">
                    <img src="{{env('URL')}}/Public/Images/{{$food->image}}" class="categoryimage"/>
                    <span class="categoryname">{{$food->title}}</span>
                    <span class="price">{{$food->price}} ₺</span>
                    <span class="details">{{$food->description}}</span>
                </div>

            @endforeach
        </div>
    </div>
@endsection