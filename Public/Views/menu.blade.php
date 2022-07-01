@extends('layout')
@section('content')
    <div class="bread">Kategoriler</div>
    <div class="container">
        <div class="col-12 categoryList">
        @foreach($categories as $category)
                <a href="{{url('category',['id'=>$category->id])}}">
                    <div class="col-6 category">
                        <img src="{{env('URL')}}/Public/Images/{{$category->image}}" class="categoryimage"/>
                        <span class="categoryname">{{$category->title}}</span>
                    </div></a>
                @endforeach
            </div>
    </div>
@endsection