<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth, Cookie, Redirect, DB;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Constants;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Validation\ValidationException;
use OwenIt\Auditing\Models\Audit;
use Carbon\Carbon;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = Auth::user();

        return response()->json(['two_factor' => false]);
    }

}
