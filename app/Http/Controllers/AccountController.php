<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.dashboard');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('account.profile');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function corporate()
    {
        $restaurant = Restaurant::all();
        return view('account.corporate');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function corporateApplication($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('account.application.restaurant')
            ->with('restaurant', $restaurant);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function restaurantStore(Request $request)
    {
        $this->validate($request, [
            'restaurant_name' => 'required|string|max:255',
            'restaurant_phone' => 'required',
            'restaurant_email' => 'required|email',
            'restaurant_website' => 'required',
            'restaurant_address' => 'required'
        ]);

        $restaurant = new Restaurant;

        $restaurant->ref_number = $this->registrationRef();
        $restaurant->name = $request->restaurant_name;
        $restaurant->user_id = auth()->user() ? auth()->user()->id : null;
        $restaurant->address = $request->restaurant_address;
        $restaurant->phone = $request->restaurant_phone;
        $restaurant->website = $request->restaurant_website;
        $restaurant->email = $request->restaurant_email;

        $restaurant->save();

        return redirect()->route('account.corporate.index')
            ->with('success', 'Your restaurant application has been submitted successfully!');
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function restaurantUpdate(Request $request, $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $this->validate($request, [
            'restaurant_name' => 'required|string|max:255',
            'restaurant_phone' => 'required',
            'restaurant_email' => 'required|email',
            'restaurant_website' => 'required',
            'restaurant_address' => 'required'
        ]);

        $restaurant->name = $request->restaurant_name;
        $restaurant->address = $request->restaurant_address;
        $restaurant->phone = $request->restaurant_phone;
        $restaurant->website = $request->restaurant_website;
        $restaurant->email = $request->restaurant_email;

        $restaurant->save();

        return back()->with('success', 'Application Updated successfully');

    }

    function registrationRef(){
        $month = Carbon::now()->format('m'); // month of year (01, 12)
        $day = Carbon::now()->format('d'); // day of month (01, 31)

        //type 1 [restaurant] vs 2 [charity]

        $orderNumber = $month.$day.$this->randomString(2); // append the above
        return $orderNumber;
    }

    function randomString($length)
    {
        $str = "";
        $characters = array_merge(range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}
