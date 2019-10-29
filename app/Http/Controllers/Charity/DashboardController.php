<?php

namespace App\Http\Controllers\Charity;

use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * display the information details page of charity
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details()
    {
        return view('account.charity.details');
    }

    /**
     * display the a listing of donations given to charity
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function donations()
    {
        $donations = Donation::all();
        $count = Donation::count();

        return view('account.charity.donations')->with([
            'donations' => $donations,
            'count' => $count,
        ]);
    }
}
