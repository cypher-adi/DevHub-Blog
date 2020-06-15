@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/cypher.jpg" style="width:150px;" class="rounded-circle ">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1> {{ $user->username }} </h1>
                <a href="/p/create" class="btn btn-primary">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-4"><strong>373</strong> Followers</div>
                <div class="pr-4"><strong>391</strong> Following</div>
            </div>
            <div class='pt-4 font-weight-bold'> {{ $user->profile->title}} </div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class='w-100'>
        </div>
        @endforeach
    </div>  
</div>
@endsection