@extends('layouts.frontend.app')
@section('content')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('logo/logo.png')}}" alt="" style="max-width:100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <h3>A Digital Press Release Distribution platform </h3>
                                        </div>
                                        <p>Simple, Fast, Transparent, Target-Oriented and Top Tier news and media distribution services all over the world</p>
                                        <p>Ticker News: Yahoo finance, Market Watch, AP News, Bloomberg, International Business Times, New York Times</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img style="  display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 100%;" src="{{asset('images/banner.png')}}">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <h3>500 News Wire: 	</h3>
                                        </div>
                                        <p>Distribute your press release all over the world. Increase your business, get your brand recognition and gain exposure targeting to the right audience, industry, interests and geography.</p>
                                        <p><b>Our mission:-</b> To get your press Release publish on Top-Tier News and media outlets to boost your business and brand recognition all over the world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <th>No Contract</th>
                                <th>Unlimited word count</th>
                                <th>Multiple links insertion</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p>A complete pay as you model with no extra and hidden charges. You are no longer bound for annual contract.</p></td>
                                <td><p>We believe in freedom of speech so there is no word limit in your press release.</p></td>
                                <td><p>We provide multiple hyperlink insertion option. Also, you can add multiple images as well</p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <img style="  display: block;
                      margin-left: auto;
                      margin-right: auto;
                      width: 100%;" src="{{asset('images/brand-logos.png')}}">

                </div>
            </div>
        </div>
    </main>

@endsection
