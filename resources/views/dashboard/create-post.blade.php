@extends('layout/index')

@section('cdkeditor')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<div class="Container">
    <div class="nav-container">
        <div class="wrapper"></div>
        <div class="navWrapper">
            <div class="logo col-lg-3 col-md-3 col-sm-12">
                <h4><a href="{{ route('welcome') }}"><span>The</span> Christians</a></h4>
            </div>
            <div class="navLinks col-lg-7 col-md-7 col-sm-12">
                <ul>
                    <li><a href="{{ route('welcome') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('teachings') }}" class="{{ Request::routeIs('teachings') ? 'active' : '' }}">Teachings</a></li>
                    <li><a href="{{ route('give') }}" class="{{ Request::routeIs('give') ? 'active' : '' }}">Give</a></li>
                    <li><a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                </ul>
            </div>
            <div class="auth col-lg-2 col-md-2 col-sm-12"><a href="#">Login</a></div>
        </div>

        <div class="content-container col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="sidebar">
                    <h4>Admin Dashboard</h4>
                    <div class="item1">
                        <ul>
                            <li><a href="{{ route('messages') }}" class="{{ Request::routeIs('messages') ? 'active' : '' }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Messages</a></li>
                            <li><a href="{{ route('create-post') }}" class="{{ Request::routeIs('create-post') ? 'active' : '' }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Publish Article</a></li>
                            <li><a href="{{ route('subscribers') }}" class="{{ Request::routeIs('subscribers') ? 'active' : '' }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Subcribers</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-angle-double-right" aria-hidden="true">Logout</a></i></li>
                        </ul>
                    </div>

                    <div class="sidebar2">
                        <div class="item2">
                            <ul>
                                <li><a href="{{ route('messages') }}" class="{{ Request::routeIs('messages') ? 'active' : '' }}"><i class="fa fa-commenting-o" aria-hidden="true"></i></a></li>
                                <li><a href="{{ route('create-post') }}" class="{{ Request::routeIs('create-post') ? 'active' : '' }}"><i class="fa fa-book" aria-hidden="true"></i></a></li>
                                <li><a href="{{ route('subscribers') }}" class="{{ Request::routeIs('subscribers') ? 'active' : '' }}"><i class="fa fa-users" aria-hidden="true"></i></a></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="content">
                    <div class="col-lg-12 col-md-12 col-sm-12 "><h4 class="post-title">Create Post</h4></div>


                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @if ((session('success')))
                            <p style="color: #fff; text-align:center; background:green; padding:10px">{{ session('success') }}</p>
                        @endif
                        @csrf
                        <input type="text" name="title" placeholder="Post Title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                            <p style="color: red">{{ $message }}</p>
                        @enderror

                        <input type="file" name="image" class="form-cotrol">
                        @error('image')
                            <p style="color: red">{{ $message }}</p>
                        @enderror

                        <textarea id="body" name="body" cols="30" rows="5" class="form-control" placeholder="Enter body here..">{{ old('body') }}</textarea>
                        @error('body')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                        <div class="button col-lg-12 col-md-12 col-sm-12">
                            <input type="submit" class="btn col-lg-6 col-md-6 col-sm-6">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
