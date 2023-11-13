@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Welcome to Cravitae</h1>
    <section class="blok-pertama">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-6">CV MAKER PLATFORM</h1>
                    <h2 class="display-1">Let’s Boost Your Personal Branding!</h2>
                    <p class="display-6">
                        Elevate Your CV. Unleash Opportunities. Your path to a captivating
                        and impactful CV begins here. Join us today!
                    </p>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/personal') }}" class="btn btn-outline-secondary"
                            style=" 
                              background-color: #c3dce3;
                              color: #265172;
                              border-radius: 10px;
                            ">CREATEYOUR OWN </a>
                        <button type="button" class="btn btn-outline-secondary"
                            style="
                margin-left: 20px;
                background-color: #c3dce3;
                color: #265172;
                border-radius: 10px;
              ">
                            Explore →
                        </button>
                    </div>
                    <div class="frame-82">
                        <div class="frame-32">
                            <div class="frame-33">
                                <svg class="vector" width="20" height="25" viewBox="0 0 20 25" fill="none">
                                    <path d="M19.9095 0.281225C19.8793 0.213732 19.8302 0.156473 19.768"></path>
                                </svg>
                                <div class="_4">
                                    <span>
                                        <span class="_4-span">4</span>
                                        <span class="_4-span2"></span>
                                        <span class="_4-span3">+</span>
                                    </span>
                                </div>
                            </div>
                            <div class="clilent">Clilent</div>
                        </div>
                        <svg class="vector-1" height="40" viewBox="0 0 0 40" fill="none">
                            <path d="M0 0V40" stroke="#E0E0E0"></path>
                        </svg>
                        <div class="frame-32">
                            <div class="frame-83">
                                <svg class="vector2" width="21" height="25" viewBox="0 0 21 25" fill="none">
                                    <path d="M20.8536 0.281225C20.8234 0.213732 20.7743 0.156473 20.7121"></path>
                                </svg>
                                <div class="_100">
                                    <span>
                                        <span class="_100-span">100</span>
                                        <span class="_100-span2"></span>
                                        <span class="_100-span3">+</span>
                                    </span>
                                </div>
                            </div>
                            <div class="likes">Likes</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="image/karakter.png" alt="karakter" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="blok-kedua" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/kaca.png" alt="Kaca" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h1 class="display-1">Unlock New Career Opportunities</h1>
                    <h2 class="display-6">
                        Discover exciting new career paths and open doors to endless
                        possibilities.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="blok-ketiga">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up-right">
                    <h1 class="display-1">Expand Your Work</h1>
                    <h2 class="display-6">
                        Broaden your horizons and elevate your professional journey.
                    </h2>
                </div>
                <div class="col-md-6" data-aos="fade-up-left">
                    <img src="image/jabat%20tangan.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="blok-keempat" data-aos="zoom-in-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/cv.png" alt="CV" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h1 class="display-1">Choose Your CV Styles</h1>
                    <h2 class="display-6">
                        Tailor your CV to reflect your unique personality and
                        professionalism.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <script>
        AOS.init();
    </script>
    @include('layouts.footer')
@endsection
