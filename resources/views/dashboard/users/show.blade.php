
@dd($users);

@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row">
      @foreach($users as $user)
      <div class="col-md-4 col-sm-6 mb-5">
        <div class="card">
          @if($user->image)
          <div style="max-height: 250px; overflow: hidden;" >
              <img src="{{ asset('storage/' . $user->image) }}" class="card-img-top mt-2" alt="{{ $user->category->name }}" >
          </div>
          @else
              <img src="https://source.unsplash.com/500x400?{{ $user->category->name }}" class="card-img-top mt-2" alt="{{ $user->category->name }}">
          @endif
          <div class="card-body">
            <h5 class="card-title text-dark">{{ $user->judul }}</h5>
            <p>
              <small class="text-muted">  By <a href="/posts?user={{ $user->user->name }}" class="text-decoration-none">{{ $user->user->name }}</a> In <a href="/posts?category={{ $user->category->slug }}" class="text-decoration-none">{{ $user->category->name }} </a>{{ $user->created_at->diffForHumans() }}</small>
            </p>
            <p class="card-text">{{ $user->excerpt }}</p>
            <a href="/post/{{ $user->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
@endsection