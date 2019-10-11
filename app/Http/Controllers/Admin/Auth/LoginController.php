<?php

namespace App\Http\Controllers\Admin\Auth;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ThrottlesLogins;
    /**
     * Max login attempts allowed.
     */
    public $maxAttempts = 5;
    /**
     * Number of minutes to lock the login.
     */
    public $decayMinutes = 3;

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /**
     * Username used in ThrottlesLogins trait
     * @return string
     */
    public function username(){
        return 'email';
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm(){

        session()->put('previousUrl', url()->previous());

        return view ('auth.login')->with([
            'title' => 'LOGIN | ADMIN',
            'homeRoute' => 'admin.dashboard.index',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }

    /**
     * @param Request $request
     */
    private function validator(Request $request){
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];
        //validate the request.
        $request->validate($rules,$messages);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request){

        $this->validator($request);

        //check if the user has too many login attempts.
        if ($this->hasTooManyLoginAttempts($request)){
            //Fire the lockout event.
            $this->fireLockoutEvent($request);
            //redirect the user back after lockout.
            return $this->sendLockoutResponse($request);
        }

        // Attempt to log the agent in
        if(Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('admin.dashboard.index'))
                ->with('status','You are Logged in as Admin!');
        }

        //keep track of login attempts from the user.
        $this->incrementLoginAttempts($request);

        //Authentication failed...
        return $this->loginFailed();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function authenticated()
    {
        $admin = Auth::user();
        $admin->token_2fa_expiry = Carbon::now();
        $admin->save();

        return redirect()->route('admin.dashboard.index');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status', 'Admin logged out successfully!');
    }
}
