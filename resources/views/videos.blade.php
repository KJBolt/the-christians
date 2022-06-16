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
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." >
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="icons col-lg-2 col-md-12 col-sm-12">
                    <p style="font-size: 10px;" class="follow">Follow Us</p>
                    <p><i class="fa fa-facebook" aria-hidden="true"></i></p>
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
            <div class="content-wrapper">
                <div class="sidebar col-lg-3 col-md-12 col-sm-12">
                    <h4>Related Videos</h4>
                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('/images/bible.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Christ is God</h5>
                            <p>January 11, 2022</p>
                        </div>
                    </div>


                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('/images/disciples.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Woman Preachings</h5>
                            <p>March 16, 2022</p>
                        </div>
                    </div>


                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('/images/worship.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Tongues</h5>
                            <p>June 20, 2022</p>
                        </div>
                    </div>


                    <div class="single-post">
                        <div class="image">
                            <img src="{{ asset('/images/reception1.jpg') }}" height="60px">
                        </div>
                        <div class="details">
                            <h5>Miracles</h5>
                            <p>January 11, 2022</p>
                        </div>
                    </div>
                </div>

                <div class="posts col-lg-8 col-md-12 col-sm-12">
                    <h1>Page to be created soon</h1>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

