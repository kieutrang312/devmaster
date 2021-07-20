<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//        check đăng nhập hay chưa
        if (Auth::check())
        { //check 12345
            $user = Auth::user();
            // check quyền admin && trạng thái hoạt động
            if ($user->role_id == 1 && $user->is_active == 1 )
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('admin.login');
            }
        }

        return redirect()->route('admin.login');
//        return $next($request);
    }
}
