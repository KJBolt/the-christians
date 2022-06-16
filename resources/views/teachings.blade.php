@extends('layout/index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/teachings.css') }}">
<section>
    <div class="Container">
        <div class="wrapper">
            <div class="nav-container">
                <div class="logo col-lg-3 col-md-12 col-sm-12">
                    <div class="logo-container">
                        <h4><a href="{{ route('welcome') }}"><span>The</span> Christians</a></h4>
                    </div>

                </div>
                <div class="search-field col-lg-7 col-md-8 col-sm-12">
                    <form action="{{ route('post.search') }}" method="get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="search" >
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true" aria-autocomplete="off"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="icons col-lg-2 col-md-12 col-sm-12">
                    <p style="font-size: 10px;" class="follow">Follow Us</p>
                    <p><a href="https://web.facebook.com/profile.php?id=100065639733006"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                    <p><i class="fa fa-youtube-square" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
        <div class="categories col-lg-12 col-md-12 col-sm-12">
            <div class="categories-wrapper ">
                <p><a href="{{ route('teachings') }}" class="{{ Request::routeIs('teachings') ? 'active' : '' }}">Teachings</a></p>
                <p><a href="{{ route('videos') }}" class="{{ Request::routeIs('videos') ? 'active' : '' }}">Videos</a></p>
            </div>
        </div>
        <div class="main-content">
            @if (session('error'))
                <p style="color: #fff; text-align:center; padding:10px; background:green">
                    {{ session('error') }}
                </p>
            @endif
            <div class="content-wrapper">
                <div class="sidebar col-lg-3 col-md-12 col-sm-12">
                    <h4>Related Topics</h4>
                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('./images/bible.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Christ is God</h5>
                            <p>January 11, 2022</p>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('./images/disciples.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Woman Preachings</h5>
                            <p>March 16, 2022</p>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('./images/worship.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Tongues</h5>
                            <p>June 20, 2022</p>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('./images/reception1.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Miracles</h5>
                            <p>January 11, 2022</p>
                        </div>
                    </div>
                </div>
                <div class="posts col-lg-8 col-md-12 col-sm-12">
                    @if (session('message'))
                        <p style="color:#fff; background:green; text-align:center; padding:10px">
                            {{ session('message') }}
                        </p>
                    @endif
                    @forelse ($posts as $post)
                        <div class="post-content">
                            <div class="image">
                                <img src="{{ asset($post->imagePath) }}" height="60px">
                            </div>
                            <div class="details">
                                <p>{{ $post->created_at->diffForHumans() }}</p>
                                <h3>{{ $post->title }}</h3>
                                <p class="c-details">{!! Str::limit( strip_tags( $post->body ), 20 ) !!}</p>
                                <a href="{{ route('single-post', $post) }}">Continue reading >></a>
                            </div>
                            @auth
                                @if (auth()->user()->id == $post->user->id)
                                    <div class="deleteandedit col-lg-1 col-md-1">
                                        <div class="delete">
                                            {{-- <a href="{{ route('post.destroy',$post) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a> --}}
                                            <form action="{{ route('post.destroy',$post) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a><button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                            </form>
                                        </div>
                                        <div class="edit">
                                            <a href="{{ route('post.edit',$post) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                @endif
                            @endauth
                        </div>
                        @empty
                            <p>No results found</p>
                    @endforelse
                </div>
            </div>
            <div class="pagination d-flex">
                <div class="paginate">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

