@extends('layouts.app')

@section('title', 'My Account - Corporate Application')
@section('content')
    @include('partials.header')
    @include('partials.header-resp')

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}" title="Welcome Page" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>


    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="dashboard-tabs-wrapper">
                                <div class="row">

                                    @include('account.sidebar')

                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="corporate">
                                                <div class="dashboard-wrapper brd-rd5">
                                                    <div class="welcome-note yellow-bg brd-rd5">
                                                        <h4 itemprop="headline">CORPORATE ACCOUNT</h4>
                                                        <p itemprop="description">
                                                            Do you have a restaurant or charity organization that you would like listed on the site, register it
                                                            through the application form below. Switch to the corporate account and gain access to more features
                                                            of the application</p>
                                                        <img src="{{ asset('images/resource/welcome-note-img.png') }}" alt="welcome-note-img.png" itemprop="image">
                                                        <a class="remove-noti" href="#" title="" itemprop="url"><img src="{{ asset('images/close-icon.png') }}" alt="close-icon.png" itemprop="image"></a>
                                                    </div>

                                                    <div class="dashboard-title">
                                                        <h4 itemprop="headline">APPLICATION FORM</h4>
                                                        <span>Fill in the required details and submit your application. Upon successful
                                                            review your application would be validated</span>
                                                    </div>

                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i class="fa fa-cutlery"></i> Restaurant</a></li>
                                                            <li><a href="#tab1-2" data-toggle="tab"><i class="fa fa-ambulance"></i> Charity</a></li>
                                                            <li><a href="#tab1-3" data-toggle="tab"><i class="fa fa-list"></i> My Applications</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="restaurant-info-form brd-rd5">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                                                            <label>Restaurant name <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                                                            <label>Contact phone <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text" required>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                                                            <label>Contact Email</label>
                                                                            <input class="brd-rd3" type="email" required>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                                                            <label>Website</label>
                                                                            <input class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Address</label>
                                                                            <textarea class="brd-rd3" required></textarea>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <div class="step-buttons">
                                                                                <button class="brd-rd3 red-bg" type="submit">Submit Application</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-2">
                                                                <div class="restaurant-gallery">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Form</span> here</h4>
                                                                    <div class="remove-ext">
                                                                        <div class="row">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="restaurant-gallery">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Rest</span>aurant</h4>
                                                                    <div class="row">
                                                                        <div class="restaurants-list">
                                                                            <div class="featured-restaurant-box style3 brd-rd5">
                                                                                <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/restaurant-logo1-2.png') }}" alt="restaurant-logo1-2.png" itemprop="image"></a></div>
                                                                                <div class="featured-restaurant-info">
                                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                                    <h4 itemprop="headline"><a href="{{ route('account.corporate.application') }}" title="" itemprop="url">Pizza Hut</a></h4>
                                                                                    <ul class="post-meta">
                                                                                        <li><i class="fa fa-envelope"></i> test@email.com</li>
                                                                                        <li><i class="fa fa-phone"></i> +243 443 333 112</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="view-menu-liks">
                                                                                    <div class="order-info">
                                                                                        <span class="processing brd-rd3" style="padding: 10px 25px">PROCESSING</span>
                                                                                    </div>
                                                                                    <a class="brd-rd3" href="{{ route('account.corporate.application') }}" title="" itemprop="url">Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Cha</span>rity</h4>
                                                                    <div class="row">
                                                                        <p class="mt-0 pl-4">No Charity registration application was found</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- Section Box -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')
@endsection
