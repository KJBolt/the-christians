@extends('layout/index')


@section('content')
<link rel="stylesheet" href="{{ asset('css/single-post.css') }}">
<div class="Container">

    <!-- Nav Links -->
    <div class="nav-wrapper">
        <div class="links">
            <div class="title">
                <h5>Follow</h5>
            </div>
            <div class="title-links">
                <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                <p><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></p>
            </div>
        </div>
        <div class="content">
            <h5><a style="text-decoration: none;" href="{{ route('welcome') }}"><span>The</span> Christians </a></h5>
        </div>
        <div class="more">
            <h5>More</h5>
        </div>
    </div>

    <!-- Body -->
    <div class="main-content">
        <div class="left">
            <h5>RELATED POSTS</h5>
            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/disciples.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Jesus is God</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/bible.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Miracles</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/prayer1.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Tithes</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/preach.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Woman Preaching</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>
        </div>


        <div class="center">
            <div class="image">
                <img src="{{ asset($filterPost->imagePath) }}" height="300px">
            </div>
            <div class="details">
                <p>{{ $filterPost->created_at->diffForHumans() }}</p>
                <div class="icons">
                    <p><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> 15</p>
                    <p><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a> 5k</p>
                </div>
            </div>

            <h5>{{ $filterPost->title }}</h5>
            <p class="body">{!! $filterPost->body !!}</p>
        </div>

        <div class="right">
            <h5>WHATS NEW?</h5>
            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/bible.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Jesus is God</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/bible.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Miracles</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/prayer1.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Tithes</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>

            <div class="content">
                <div class="image">
                    <img src="{{ asset('/images/preach.jpg') }}" height="60px">
                </div>
                <div class="details">
                    <h6>Woman Preaching</h6>
                    <p>January 19, 2022</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


