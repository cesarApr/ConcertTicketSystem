@extends('layout.ticketlayout')


@section('content')
    <div class="product-page-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="prod-page-title">
                        <h2>iRyS</h2>
                        <p>By <span>Hololive Production</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="left-profile-box-m prod-page">
                        <div class="pro-img">
                            <img src="{{ asset('master/images/holo-logo.png') }}" alt="#" />
                        </div>
                        <br>
                        <a href="https://en.hololive.tv/">Visit company</a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-8">
                    <div class="md-prod-page">
                        <div class="md-prod-page-in">
                            <div class="page-preview">
                                <div class="preview">
                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane active" id="pic-1"><img
                                                src="{{ asset('master/images/pr-1.png') }}" alt="#" /></div>
                                        <div class="tab-pane" id="pic-2"><img
                                                src="{{ asset('master/images/pr-2.png') }}" alt="#" /></div>
                                        <div class="tab-pane" id="pic-3"><img
                                                src="{{ asset('master/images/pr-3.png') }}" alt="#" /></div>
                                        <div class="tab-pane" id="pic-4"><img
                                                src="{{ asset('master/images/pr-4.png') }}" alt="#" /></div>
                                    </div>
                                    <ul class="preview-thumbnail nav nav-tabs">
                                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                                    src="{{ asset('master/images/pr-1.png') }}" alt="#" /></a></li>
                                        <li><a data-target="#pic-2" data-toggle="tab"><img
                                                    src="{{ asset('master/images/pr-2.png') }}" alt="#" /></a></li>
                                        <li><a data-target="#pic-3" data-toggle="tab"><img
                                                    src="{{ asset('master/images/pr-3.png') }}" alt="#" /></a></li>
                                        <li><a data-target="#pic-4" data-toggle="tab"><img
                                                    src="{{ asset('master/images/pr-4.png') }}" alt="#" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="description-box">
                            <div class="dex-a">
                                <h4>Description</h4>
                                <p>IRyS, a half-demon, half-angel also known as a Nephilim, once brought hope
                                    to “The Paradise” during the ancient age. Her full name is ███████ Irys. This
                                    current era, riddled with despair and desperation, has brought upon her second
                                    awakening. She has arrived to deliver hope, with her feelings put into her
                                    lyrics and songs, and determination in her voice.
                                </p>
                            </div>
                            <div class="spe-a">
                                <h4>Specifications</h4>
                                <ul>
                                    <li class="clearfix">
                                        <div class="col-md-4">
                                            <h5>Title</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <p>iRyS - World Tour</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="col-md-4">
                                            <h5>Schadule</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <p>29.09.2022 | 19.00 WIB</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="col-md-4">
                                            <h5>Location</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Gelora Bungkarno</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="price-box-right">
                        <h4>Price</h4>
                        <h3>Rp. 999.999 <span>/person</span></h3>
                        <p>Option</p>
                        <select class="form-control select2">
                            <option value="sc" disabled selected>Seat class</option>
                            <option value="vvip+">VVIP+</option>
                            <option value="vvip">VVIP</option>
                            <option value="vip">VIP</option>
                            <option value="ec">Economy</option>
                        </select>
                        <label for="numberperson" class="form-label"></label>
                        <p>Number Persons</p>
                        <input type="number" class="form-control" id="input" placeholder="1">
                        <a href="#">Contact company</a>
                        <h5><strong>Total</strong> Rp. 999.999</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
