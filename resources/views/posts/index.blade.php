@extends('pages.layouts.app')

@section('content')

    <h1>Our visitors uploads</h1>
    <form class="navbar-form" role="search" method="GET" action="{{url("searchcontent")}}">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="centerPost">
                <div class="row">
                    <div class="">


                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="bottomBorder">
                        <h3><a href="{{ url('posts/'.$post->id) }}">{{$post->title}}</a></h3>
                            <hr>
                            <div class="postText">
                                <p style="width: 236px; height:30px;">{{$post->length}}</p>
                            </div>
                              <img class="postImg" src="{{ asset("/storage/cover_images/$post->cover_image")}}" alt="{{ $post->title }}" />
                                <input id="toggle-heart" type="checkbox"  />
                                <label for="toggle-heart">❤<p>100 Likes</p></label>

                            <small class="postSmall">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @else
        <p>No posts found</p>
    @endif
@endsection