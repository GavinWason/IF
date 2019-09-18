<div>
    Hello! @auth {{ Auth::user()->firstname.' '.Auth::user()->lastname }} @endauth
    <p>
        This is your verification code {{ $code2fa }}. Please enter it in the space required to complete your login.
    </p>
</div>