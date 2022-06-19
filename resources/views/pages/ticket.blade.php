@extends('layout.master')


@section('content')
    <div class="page-content-product">
        <div class="main-product">
            <div class="container">
                <div class="row clearfix">
                    <div class="find-box">
                        <h1>Find your fun here!!!</h1>
                        <h4>It has never been easier.</h4>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="ticket/hololive">
                            <div class="box-img">
                                <h4>Hololive</h4>
                                <img src="{{asset('master/images/product/1.png')}}" alt="hololive" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Western</h4>
                                <img src="{{asset('master/images/product/2.png')}}" alt="western" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>K-pop</h4>
                                <img src="{{asset('master/images/product/3.png')}}" alt="K-pop" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>J-pop</h4>
                                <img src="{{asset('master/images/product/4.png')}}" alt="J-pop" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Indonesian pop</h4>
                                <img src="{{asset('master/images/product/5.png')}}" alt="Indonseian pop" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Jazz</h4>
                                <img src="{{asset('master/images/product/6.png')}}" alt="Jazz" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Rock</h4>
                                <img src="{{asset('master/images/product/7.png')}}" alt="Rock" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="productpage.html">
                            <div class="box-img">
                                <h4>Charity</h4>
                                <img src="{{asset('master/images/product/8.png')}}" alt="Charity" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
