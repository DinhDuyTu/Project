<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Auth;

class checkUserCoruse
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
        $param = \Request::segment(2);
        $userCourse = DB::table('user_course')
            ->where('user_id', Auth::user()->id)
            ->where('course_id', $param)
            ->first();
        if ($userCourse != null) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
