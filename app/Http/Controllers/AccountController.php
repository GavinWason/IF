<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class AccountController extends Controller
{
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
        $restaurant = Restaurant::find($id);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
