@extends('layout.master')


@section('content')
    <div class="start-free-box">
        <div class="container">
            <div class="row">
                <div class="main-start-box">
                    <div class="bg_img_left"><img src="{{asset('master/images/bg_img1.png')}}" alt="#" /></div>
                    <div class="container">
                        <div class="buyer-box clearfix">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="left-buyer">
                                    <img class="img-responsive" src="{{asset('master/images/creat_pro.jpeg')}}" alt="#" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="right-buyer">
                                    <h4>buyer</h4>
                                    <h2>Choose your favorite concert<br>
                                        <span>With a variety of concert options available</span>
                                    </h2>
                                    <p>Don't be afraid to miss your favorite concert again.
                                        channels. with TiCon you can easly search
                                        various concerts available.
                                    </p>
                                    <a class="nav-link" href="{{ route('register') }}">Create a buyer account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="bg_img_right"><img src="{{asset('master/images/bg_img1.png')}}" alt="#" /></div>
                <div class="main-start-box">
                    <div class="container">
                        <div class="supplier clearfix">
                            <div class="col-md-5 col-sm-6">
                                <div class="left-supplier">
                                    <h4>supplier</h4>
                                    <h2>Grow your concert <br><span>With a new sales channel</span></h2>
                                    <p>Never worry about sales or income ftom outbound
                                        channels. with TiCon your concert is directly
                                        connected to thousands of interested in your
                                        music.
                                    </p>
                                    .
                                    <a class="nav-link" href="{{ route('register') }}">Create a supplier account</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="right-supplier">
                                    <img class="img-responsive" src="{{asset('master/images/supplier-pc-img.jpg')}}" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
