@extends('layout')
@section('content')
    <div class="head">
        <a href="{{url('menu',['username'=>$user->username])}}" class="brand">{{$settings->name}}</a>
    </div>
    <div class="container">
        <div class="col-12 categoryList">
            @foreach($categories as $category)
                <a href="{{url('category',['username'=>$user->username,'id'=>$category->id])}}">
                    <div class="col-12 category">
                        <img src="{{env('URL')}}/Public/Images/{{$category->image}}" class="categoryimage"/>
                        <span class="categoryname">{{$category->title}}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection