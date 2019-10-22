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

                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="dashboard">
                                                <div class="tabs-wrp brd-rd5">
                                                    <h4 itemprop="headline">MY MENUS</h4>
                                                    <div class="select-wrap-inner">
                                                        <a class="btn btn-primary pull-right" href="{{ route('account.restaurant.menu.create') }}" title="" itemprop="url">New Menu</a>
                                                    </div>
                                                    <div class="order-list">
                                                        <div class="order-item brd-rd5">
                                                            <div class="order-thumb brd-rd5">
                                                                <a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/order-img1.jpg') }}" alt="order-img1.jpg" itemprop="image"></a>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                            </div>
                                                            <div class="order-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>

                                                                <span class="price">$85.00</span>
                                                                <span class="processing brd-rd3">PROCESSING</span>
                                                                <a class="brd-rd2" href="#" title="" itemprop="url">Order Detail</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pagination-wrapper text-center style2">
                                                        <ul class="pagination justify-content-center">
                                                            <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                            <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                        </ul>
                                                    </div><!-- Pagination Wrapper -->
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
