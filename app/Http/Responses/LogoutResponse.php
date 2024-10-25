<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;
use Illuminate\Support\Facades\Auth;
use OwenIt\Auditing\Models\Audit;
use Carbon\Carbon;

class LogoutResponse implements LogoutResponseContract
{

    public function toResponse($request)
    {
        return redirect()->intended(config('fortify.home'));
    }

}
