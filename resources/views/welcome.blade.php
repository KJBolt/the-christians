@extends('layout/index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- First Section -->
    <section>
        <div class="Container">
            <div class="wrapper"></div>
            <div class="navWrapper">
                <div class="logo col-lg-3 col-md-3 col-sm-12">
                    <h4><span>The</span> Christians</h4>
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
                @guest
                    <div class="auth col-lg-2 col-md-2 col-sm-12"><a href="{{ route('register') }}">Sign In</a></div>
                @endguest
                @auth
                    <div class="auth col-lg-2 col-md-2 col-sm-12"><a href="{{ route('logout') }}">Logout</a></div>
                @endauth

            </div>
            <div class="content col-lg-7 col-md-9 col-sm-9">
                <div class="content-details ">
                    <h1>Acts 11:26</h1>
                    <p>And when he had found him, he brought him unto Antioch.
                        And it came to pass, that a whole year they assembled themselves with the church, and taught much people.
                        And the disciples were called Christians first in Antioch.
                    </p>
                    <a href="{{ route('teachings') }}" class="btn col-lg-6 col-md-6 col-sm-6">Study the Scriptures</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Second Section -->
    <section>
        <div class="Container-second">
            <div class="wrapper2">
                <div class="top">
                    <div class="image1 col-lg-5 col-md-6 col-sm-12">
                        <div class="content col-lg-7">
                            <h2>OBJECTIVE</h2>
                            <p>We bring you sermons and teachings from the from the late apostles. Sermos conerning his death and ressurection</p>
                        </div>
                    </div>
                    <div class="image2 col-lg-7 col-md-6 col-sm-12">

                    </div>
                </div>

                <div class="bottom">
                    <div class="image1 col-lg-7 col-md-6 col-sm-12"></div>
                    <div class="image2 col-lg-5 col-md-6 col-sm-12">
                        <div class="content ">
                            <h2> Responsibility</h2>
                            <p>It is our duty to spread the word and save people from eternal destruction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Third Section -->
    <section>
        <div class="container-2">
            <div class="wrapper3">
                <div class="details">
                    <div class="content">
                        <p class="first-paragraph">Variety of topics at your disposal</p>
                        <h1 class="col-sm-12">Start learning now</h1>
                        <p class="small">We have compiled a variety of interesting topics just for you.</p>
                    </div>
                    <div class="buttons">
                        <a href="{{ route('teachings') }}" class="btn col-lg-12">Get Started</a>
                    </div>
                </div>

                <div class="right col-lg-9 col-md-9 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('images/132.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth Section -->
    <section>
        <div class="wrapper4">
            <div class="Container">
                        <div class="head">
                            <p>We are here to support you grow in the Lord</p>
                            <h1>Get in touch</h1>
                        </div>


                        <div class="contact col-lg-7 col-md-6 col-sm-9">
                            <livewire:message-form />
                        </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container-footer">
            <div class="wrapper">
                <div class="item-container">
                    <div class="contact col-sm-12 col-md-12">
                        <div class="street">
                            <p><i class="fa fa-home" aria-hidden="true"></i> Bubiashie-Accra</p>
                        </div>
                        <div class="location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> The Christians behind Accra Academy</p>
                            <p class="second">Post Office Box Ds 1673 Dansoman-Estate Accra</p>
                        </div>

                        <div class="number">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> 0265896378</p>
                            <p class="second">057334567</p>
                        </div>
                    </div>
                </div>

                <div class="social-media">
                    <div class="media-align">
                        <div class="media-wrapper col-lg-11">
                            <div class="media-handles">
                                <p>Follow Us on Social Media</p>
                            </div>
                            <div class="media-icons">
                                <p><a href="https://web.facebook.com/profile.php?id=100065639733006"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                                <p><i class="fa fa-youtube-square" aria-hidden="true"></i></p>
                            </div>
                            <div class="newsletter">
                                <p>Sign up to our newsletter</p>
                                <livewire:subscribe />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gathering">
                    <div class="gathering-align">
                        <div class="gathering-wrapper col-lg-12 col-md-12 col-sm-12">
                            <h3>Meeting days</h3>
                            <div class="teachings">
                                <p>Tuesdays - Sermon 7:30pm to 9:00pm</p>
                                <p>Thursdays - Prayers and sermon 7:30pm to 9:00pm</p>
                                <p>Sundays - Service 10am to 2pm</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script>
        $('#submit').submit(function (e) {
        if ($('#firstName').value() === '') {
        // Show some validation message here...

        // Prevent default and return.
        return e.preventDefault();
    }

    // Submit to API via AJAX call.
});
    </script>

@endsection



