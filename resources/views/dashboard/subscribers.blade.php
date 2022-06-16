@extends('layout/index')

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
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true">Logout</a></i></li>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 "><h4 class="post-title">Subscribers</h4></div>

                    <div class="Table">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsletters as $newsletter)
                                    <tr>
                                        <th scope="row">{{ $newsletter->id }}</th>
                                        <td>{{ $newsletter->email }}</td>
                                        <td>{{ $newsletter->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination  mx-auto">
                    {{ $newsletters->links() }}
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
