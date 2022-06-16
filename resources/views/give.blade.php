@extends('layout/index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/give.css') }}">
<div class="Container">
    <div class="nav-container">
        <div class="wrapper"></div>
        <div class="navWrapper">
            <div class="logo col-lg-3 col-md-3 col-sm-12">
                <h4><a href="{{ route('welcome') }}"><span>The</span> Christians</a></h4>
            </div>
            <div class="navLinks col-lg-7 col-md-7 col-sm-12">
                <ul>
                    <li><a href="{{ route('welcome') }}" class="{{ Request::routeIs('welcome') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('teachings') }}" class="{{ Request::routeIs('teachings') ? 'active' : '' }}">Teachings</a></li>
                    <li><a href="{{ route('give') }}" class="{{ Request::routeIs('give') ? 'active' : '' }}">Give</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                    @endauth

                </ul>
            </div>
            <div class="auth col-lg-2 col-md-2 col-sm-12"><a href="#">Login</a></div>
        </div>


        <div class="content col-lg-8 col-md-10 col-sm-10">
            <div class="content-items">
                <h5>WHY WE GIVE</h5>
                <p>
                    When you give to the Christians ministry, its a way of supporting Gods works
                    in addition to enabling us run the affairs of the ministry. Also, portions of the revenue
                    generated will be used to facilitate the continuity of the website.
                    Any amount is much appreciated. Thank you and God bless you.
                </p>
                <div class="give"><a href="#" class="btn">Give</a></div>
            </div>
        </div>
    </div>

</div>
@endsection
