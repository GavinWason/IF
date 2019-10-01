@extends('layouts.app')

@section('title', 'My Application - Restaurant')
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
                                            <div class="tab-pane fade in active" id="application-restaurant">
                                                <div class="dashboard-wrapper brd-rd5">

                                                    <div class="dashboard-title">
                                                        <h4 itemprop="headline">MY APPLICATION - RESTAURANT #222222</h4>
                                                    </div>

                                                    <div class="toggle-wrapper text-center bottom-padd80">
                                                        <div id="toggle" class="toggle">
                                                            <div class="toggle-item">
                                                                <h4><i class="fa fa-angle-right brd-rd50"></i> Preview Application Details</h4>
                                                                <div class="content">
                                                                    <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.2s">
                                                                        <div class="featured-restaurant-thumb">
                                                                            <a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/most-popular-img1-2.png') }}" alt="most-popular-img1-2.png" itemprop="image"></a>
                                                                        </div>

                                                                        <div class="featured-restaurant-info">
                                                                            <h4 itemprop="headline"><a href="#" title="" itemprop="url">Burger King</a></h4>
                                                                            <span class="red-clr"><u>Address</u>: 5th Avenue New York 68</span>
                                                                            <ul class="post-meta">
                                                                                <li><i class="fa fa-envelope"></i> test@email.com</li>
                                                                                <li><i class="fa fa-phone"></i> +22 333 222 112</li>
                                                                                <li><i class="fa fa-globe"></i> <a href="" target="_blank">www.website.com</a></li>
                                                                            </ul>
                                                                            <br />
                                                                            <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-spinner"></i> &nbsp;Processing</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="toggle-item">
                                                                <h4><i class="fa fa-angle-right brd-rd50"></i> Edit Application</h4>
                                                                <div class="content">
                                                                    Insert Edit Form here
                                                                </div>
                                                            </div>
                                                            <div class="toggle-item">
                                                                <h4><i class="fa fa-angle-right brd-rd50"></i> Delete Application</h4>
                                                                <div class="content">
                                                                    <p>Would you like to delete the application? Click Below to delete</p>
                                                                </div>
                                                            </div>
                                                        </div><!-- Accordions -->
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