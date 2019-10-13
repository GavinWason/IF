@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('admin.partials.header')

    <div class="app-main">
        @include('admin.partials.sidebar')

        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i>
                            </div>
                            <div>
                                Dashboard - Home
                                <div class="page-title-subheading">
                                    View and manage activities on the platform.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-midnight-bloom">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Restaurants</div>
                                    <div class="widget-subheading">Total registered restaurants</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Charities</div>
                                    <div class="widget-subheading">Total number of Charities</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white">
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Clients</div>
                                    <div class="widget-subheading">Total number of users</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white">
                                        <span>43</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-premium-dark">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Gifts</div>
                                    <div class="widget-subheading">Total food value given</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning">
                                        <span>Ksh 28,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">
                                Latest Applications
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="active btn btn-focus">All Pending</button>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Entity</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img
                                                                    width="40"
                                                                    class="rounded-circle"
                                                                    src="{{ asset('images/avatars/icon_restaurant.png') }}"
                                                                    alt=""
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">John Doe</div>
                                                        <div class="widget-subheading opacity-7">
                                                            Web Developer
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Madrid</td>
                                        <td class="text-center">
                                            <div class="badge badge-warning">Restaurant</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">
                                                Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center text-muted">#347</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="{{ asset('images/avatars/icon_charity.jpg') }}" alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">
                                                            Ruben Tillman
                                                        </div>
                                                        <div class="widget-subheading opacity-7">
                                                            Etiam sit amet orci eget
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Berlin</td>
                                        <td class="text-center">
                                            <div class="badge badge-secondary">&nbsp;&nbsp;&nbsp; Charity &nbsp;&nbsp;&nbsp;</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">
                                                Details
                                            </button>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="d-block text-right card-footer">
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-success">
                                      <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-arrow-right"></i>
                                      </span>
                                        View All
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <span>Restaurants</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <span>Charities</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.partials.footer')
        </div>

        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>
@endsection