@extends('layouts.app')

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

                                    @hasanyrole('Restaurant|Charity')
                                        @role('Restaurant')
                                            @include('account.restaurant.dashboard')
                                        @endrole

                                        @role('Charity')
                                            Charity Dashboard
                                        @endrole
                                    @else
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="dashboard">
                                                <div class="dashboard-wrapper brd-rd5">
                                                    <div class="welcome-note yellow-bg brd-rd5">
                                                        <h4 itemprop="headline">WELCOME TO YOUR ACCOUNT DASHBOARD</h4>
                                                        <p itemprop="description">From your account dashbaord you can manage your profile details, view your orders,
                                                            and further if you operate a restaurant on the platform; manage activities related to the restaurant.
                                                            Would it come that you would like to have your restaurant or charity organization listed on the site, register it
                                                            through the application form below.</p>
                                                        <img src="{{ asset('images/resource/welcome-note-img.png') }}" alt="welcome-note-img.png" itemprop="image">
                                                        <a class="remove-noti" href="#" title="" itemprop="url"><img src="{{ asset('images/close-icon.png') }}" alt="close-icon.png" itemprop="image"></a>
                                                    </div>

                                                    <div class="dashboard-title">
                                                        <h4 itemprop="headline">QUICK VIEW</h4>
                                                        <span>Define <a class="red-clr" href="#" title="" itemprop="url">Search criteria</a> to search for specific</span>
                                                    </div>

                                                    <div class="restaurants-list">
                                                        <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/restaurant-logo1-1.png') }}" alt="restaurant-logo1-1.png" itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                </ul>
                                                            </div>
                                                            <div class="view-menu-liks">
                                                                <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                            </div>
                                                        </div>
                                                        <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.3s">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/restaurant-logo1-2.png') }}" alt="restaurant-logo1-2.png" itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pizza Hut</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $40</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                </ul>
                                                            </div>
                                                            <div class="view-menu-liks">
                                                                <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 20</span>
                                                                <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                            </div>
                                                        </div>
                                                        <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.4s">
                                                            <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/restaurant-logo1-1.png') }}" alt="restaurant-logo1-1.png" itemprop="image"></a></div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Burger King</a></h4>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $100</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                </ul>
                                                            </div>
                                                            <div class="view-menu-liks">
                                                                <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 15</span>
                                                                <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endhasanyrole

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
