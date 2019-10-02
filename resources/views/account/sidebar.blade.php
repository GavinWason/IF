<!-- account dashboard sidebar -->
<div class="col-md-4 col-sm-12 col-lg-4">
    <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
        <div class="profile-sidebar-inner brd-rd5">
            @auth
            <div class="user-info red-bg">
                <img class="brd-rd50" src="{{ asset('images/resource/profile-thumb1.jpg') }}" alt="user-avatar.jpg" itemprop="image">
                <div class="user-info-inner">
                    <h5 itemprop="headline"><span style="text-transform: uppercase">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</span></h5>
                    <span>{{ \Illuminate\Support\Str::limit(Auth::user()->email, 15) }}</span>
                    <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('sidebar-logout-form').submit();"
                                itemprop="url"><i class="fa fa-sign-out"></i> SIGN OUT</a>

                    <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth

            <ul class="nav nav-tabs">
                {{--<li class="active"><a href="{{ route('account.index') }}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>--}}
                <li><a href="{{ route('account.index') }}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                <li><a href="{{ route('account.profile.index') }}"><i class="fa fa-cog"></i> MY PROFILE</a></li>
                <li><a href="#"><i class="fa fa-shopping-basket"></i> MY ORDERS</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> MY REVIEWS</a></li>
                <li><a href="#"><i class="fa fa-heart"></i> SHORTLISTS</a></li>
                <li><a href="{{ route('account.corporate.index') }}"><i class="fa fa-building"></i> CORPORATE</a></li>
            </ul>
        </div>
    </div>
</div>