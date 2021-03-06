@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 ">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-3">
                    <div class="h3"> {{ $user->username }} </div>
                    <follow-button></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="btn btn-primary">Add New Post</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-4"><strong>373</strong> Followers</div>
                <div class="pr-4"><strong>391</strong> Following</div>
            </div>
            <div class='pt-4 font-weight-bold'> {{ $user->profile->title}} </div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
            @can('update', $user->profile)
                <div><a href="/profile/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit Profile</a></div>
            @endcan

        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class='w-100'>
            </a>
        </div>
        @endforeach
    </div>  
</div>
@endsection
