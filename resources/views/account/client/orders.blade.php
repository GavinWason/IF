@extends('layouts.app')

@section('title', 'My Orders - Dashboard | CheapFood')

@section('content')
    @include('partials.header')
    @include('partials.header-resp')

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}" title="Welcome Page" itemprop="url">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Orders</li>
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

                                    <div class="col-md-8 col-sm-12 col-lg-8 pt-4">
                                        <div class="dashboard-title">
                                            <h4 itemprop="headline">My Initiated Orders</h4>
                                        </div>
                                        @forelse( $orders as $order)
                                            <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="featured-restaurant-thumb">
                                                    <img class="brd-rd4" src="{{ asset('images/resource/restaurant-logo1-1.png') }}" alt="" itemprop="image">
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="">Donated by: <label for="" class="red-clr">#</label></span>
                                                    <h5 itemprop="headline"><i class="fa fa-money"></i> Ksh #</h5>
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-hashtag"></i><strong>#</strong></li>
                                                        <li><span class="alert alert-info pt-1 pb-1"> # </span></li>
                                                    </ul>
                                                </div>
                                                <div class="view-menu-liks">
                                                    {{--<span class="red-bg brd-rd4 post-likes"><i class="fa fa-money"></i> Ksh {{ $menu->price }}</span>--}}
                                                    <a class="brd-rd3" href="{{ route('account.client.order.show', $order->ref_number) }}" title="" itemprop="url">View</a>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert-warning p-5" style="margin-top: 50px">
                                                You do not have any orders! View <a class="red-clr" href="{{ route('home.menu.index') }}">Menus</a> and get yourself something tasteful
                                            </div>
                                        @endforelse
                                        {{ $orders->links() }}
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
